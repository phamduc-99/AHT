<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $products = Product::paginate(8);
        return view('frontend/index', compact('products'));
    }
}
