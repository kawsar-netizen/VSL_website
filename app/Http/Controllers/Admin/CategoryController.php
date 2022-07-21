<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_list = Category::latest()->get();

        return view('admin.pages.category.category_list', compact('category_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.category_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
           
        ];
        $this->validate($request, $rules);
        $request->validate([
            'cat_name' => 'required|unique:categories,cat_name',
            'status' => 'required',
          ], [
            'cat_name.required' => 'Please enter category name',
            'status.required' => 'Please enter status',
          ]);
        $categoryCreate = new Category();
        $categoryCreate->cat_name = $request->input('cat_name');
        $categoryCreate->status = $request->input('status') == true ? '1' : '0';
        $categoryCreate->save();
        return redirect()->route('category.index')->with('message','Categroy Added Successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryEdit = Category::findOrFail($id);
        return view('admin.pages.category.category_edit',compact('categoryEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'cat_name' => 'required',
            'status' => 'required',
          ], [
            'cat_name.required' => 'Please enter category name',
            'status.required' => 'Please enter status',
          ]);
        $categoryUpdate = Category::findOrFail($id);
        $categoryUpdate->cat_name = $request->input('cat_name');
        $categoryUpdate->status = $request->input('status') == true ? '1' : '0';
        $categoryUpdate->save();
        return redirect()->route('category.index')->with('update', 'Category updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoryDestroy = Category::findOrFail($id);
        $categoryDestroy->delete();
        return redirect()->route('category.index')->with('destory', 'Category Deleted Successfully!');
    }
}
