<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Http\Requests\RequestAddProduct;
use App\Http\Requests\RequestEditProduct;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(5);
        return view('backend\listproduct', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend\addproduct', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestAddProduct $request)
    {   
        //Thêm sản phẩm
        $product = new Product;
        $product->name = $request->name;
        $product->code = $request->code;
        $product->slug = Str::slug($request->name,'-');
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->featured = $request->featured;
        $product->state = $request->state;
        $product->info = $request->info;
        $product->describer = $request->describe;
        $product->save();
        
        //Thêm ảnh
        $arr = [$request->img1,$request->img2,$request->img3];
        $i = 1;
        foreach($arr as $key=>$file){
            $file_name = Str::slug($request->name,'-'). $i.'.'.$file->getClientOriginalExtension();
            $path = public_path().'/image';
            // Upload ảnh lên server
            $file->move($path, $file_name);
            // Lưu tên ảnh vào CSDL
            $image = new Image;
            $image->img = $file_name;
            $image->product_id = $product->id;
            $image->save();
            $i++;
        }
        
        //Thêm category
        foreach($request->category as $key=>$category){
            $product->category()->attach($category);
        }
        return redirect()->route('product.index')->with('success','Thêm sản phẩm thành công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('backend/editproduct',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestEditProduct $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->code = $request->code;
        $product->slug = Str::slug($request->name,'-');
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->featured = $request->featured;
        $product->state = $request->state;
        $product->info = $request->info;
        $product->describer = $request->describe;
        $product->save();
        
        //cập nhập ảnh
        $images = $product->image->all(); //mảng 3 ảnh cũ của product, thứ tự ảnh trong mảng giống thứ tự ảnh trong form edit
        $i = 1;
        foreach($images as $image){
            if($request->hasFile('img'.$i)){ // nếu thay đổi ảnh thứ $i
                if($i == 1) $file = $request->img1;
                else if($i == 2) $file = $request->img2;
                else if($i == 3) $file = $request->img3;
                $path = public_path().'/image';
                //Xoa anh cu
                
                // Upload ảnh lên server
                $file->move($path, $image->img);
                //Lấy tên file cũ -> k cần sửa bảng image
                //Tên file ảnh không thay đổi nên ảnh cũ bị thay thế bởi ảnh mới -> k cần xóa ảnh cũ
            }
            $i++;
        }
        // cập nhập category
        $product->category()->detach();
        foreach($request->category as $key=>$category){
            $product->category()->attach($category);
        }
        return redirect()->route('product.index')->with('success','Sửa sản phẩm thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        //xoa anh
        $images = $product->image->all();
        $path = public_path().'/image';
        foreach($images as $image){
            unlink($path.'/'.$image->img);
        }

        $product->category()->detach();
        $product->delete();

        return redirect()->route('product.index')->with('success','Xoas sản phẩm thành công');
    }
}
