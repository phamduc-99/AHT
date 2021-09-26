<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Requests\RequestAddCategory;
use App\Http\Requests\RequestEditCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend/category', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestAddCategory $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->slug = Str::slug($request->name,'-');
        $category->save();
        return redirect()->route('category.index')->with('success','Thêm danh mục thành công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend/editcategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestEditCategory $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name,'-');
        $category->save();
        return redirect()->route('category.index')->with('success','Sửa danh mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->product()->detach();
        $category->delete();
        return redirect()->route('category.index')->with('success','Xóa danh mục thành công');
    }
}
