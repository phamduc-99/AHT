<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Oder;

class OrderController extends Controller
{
    public function orders(){
        $orders = Oder::where('state',0)->get();
        return view('backend.order', compact('orders'));
    }
    public function detail($id){
        $order =  Oder::find($id);
        return view('backend.detailorder', compact('order'));
    }
    public function approve($id){
        $order = Oder::find($id);
        $order->state = 1;
        $order->save();
        return redirect()->route('order.index');
    }
    public function processed(){
        $orders = Oder::where('state',1)->get();
        return view('backend.processed', compact('orders'));
    }
}
