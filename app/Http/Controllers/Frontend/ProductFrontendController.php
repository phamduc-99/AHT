<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;

class ProductFrontendController extends Controller
{
    public function detail($slug){
        $product = Product::where('slug',$slug)->first();
        $categories = $product->category;
        $cateproducts = [];
        foreach($categories as $key=>$category){
            $cateproducts = array_merge($cateproducts, $category->product->all());                                    
        }
        $cateproducts = Collection::make($cateproducts);
        $newproducts = Product::where('featured',2)->get();


        
        return view('frontend/single-product', compact('product','newproducts','cateproducts'));
    }
    public function all(){
        $products = Product::all();
        $categories = Category::all();
        return view('frontend.shop',compact('products','categories'));
    }
    public function show($categoryName){
        $products = Category::where('name',$categoryName)->first()->product;
        $categories = Category::all();
        return view('frontend.shop',compact('products','categories'));
    }
    public function comment($id,CommentRequest $request){
        Comment::create([
            'content'=>$request->content,
            'product_id'=> $id,
            'user_id'=> User::where('email', Auth::user()->email)->first()->id
        ]);
        return redirect()->back();
    }
}
