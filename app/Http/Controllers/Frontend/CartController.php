<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestAddUser;
use App\Models\Product;
use App\Models\Voucher;
use Illuminate\Http\Request;
use App\Models\Oder;
use App\Models\OderDetail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CartController extends Controller
{   
    public function Cart(){
        
        return view('frontend.cart');
    }
    public function addCart($slug,Request $request){
        $product = Product::where('slug',$slug)->first();
        //Lấy giá khuyến mãi nếu có
        if($product->discount>0){
            $price = $product->discount;
        }else{
            $price = $product->price;
        }
        //Nếu thêm sản phẩm kèm số lượng
        if($request->quantity){
            $quantity = $request->quantity;
        }else{
            $quantity=1;
        }
        //Lấy giỏ hàng từ session
        $cart = session()->get('cart') ? session()->get('cart') : null;
        //Cập nhập lại giỏ hàng trên session
        if(isset($cart[$slug])) {
            $cart[$slug]['quantity'] += $quantity;
        } else {
            $cart[$slug] = [
                "name" => $product->name,
                "quantity" => $quantity,
                "price" => $price,
                "image" => $product->image()->first()->img
            ];
            $count = session()->get('count') ? session()->get('count') : 0;
            $count++;
            session()->put('count',$count);
        }
        session()->put('cart', $cart);
               
        return redirect()->back();
    }
    public function updateCart(Request $request)
    {
        if($request->slug && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->slug]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
        }
    }
    public function removeCart(Request $request){
        if($request->slug){
            $cart = session()->get('cart');
            unset($cart[$request->slug]);
            session()->put('cart', $cart);
            $count = session()->get('count') ? session()->get('count') : 0;
            $count--;
            session()->put('count',$count);
        }
    }
    public function voucher(Request $request){
        if(isset($request->voucher)){
            $vouchers = Voucher::all();
            $v = -1;
            foreach($vouchers as $key=>$voucher){
                if($voucher->code == $request->voucher){
                    $v = $voucher->percent;
                    break;
                }
            }
            $money = [
                "voucher" => $v
            ];
            session()->put('money', $money);
        }
    }
    public function checkout(){
        return view('frontend/checkout');     
    }
    public function checkoutUser(){
        return view('frontend/checkoutuser');     
    }
    public function payment(Request $request){
        //Nếu chưa có tk thì thêm vào
        if($request->password){
            User::insert(['email' => $request->email, 'password'=>Hash::make($request->password), 'fullname' => $request->fullname,'address' => $request->address, 'phone' => $request->phone]);
            Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        }else{ // Nếu có rồi thì cập nhập tk
            $user = User::where('email',Auth::user()->email)->first();
            $user->fullname = $request->fullname;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->save();
        }
        $order = new Oder;
        $order->user_id = User::where('email',$request->email)->first()->id;
        $order->total = session('money')['total_final'];
        $order->state = 0;
        $order->save();
        // Save to order detail table
        foreach (session('cart') as $key => $value) {
            $order_detail = new OderDetail;
            $order_detail->name = $value['name'];
            $order_detail->price = $value['price'];
            $order_detail->quantity = $value['quantity'];
            $order_detail->image = $value['image'];
            $order_detail->order_id = $order->id;
            $order_detail->save();
        }
        session()->forget('cart');
        session()->forget('money');
        session()->forget('count');
        $data = $order;
        \Mail::to($request->email)->send(new \App\Mail\SendMail($data));

        return redirect()->route('frontend.index');
    }

}
