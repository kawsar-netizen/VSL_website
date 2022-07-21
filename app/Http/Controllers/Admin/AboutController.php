<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutList = About::latest()->get();
        return view('admin.pages.about.about_list',compact('aboutList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.about.about_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required|unique:abouts,title',
            'description' => "required",
            'image' => 'required',
           
          ], [
            'title.required' => 'Please enter about title',
            'description.required' => 'Please enter about description',
            'image.required' => 'Please enter about image',
            
          ]);

          $aboutCreate = New About();
          $aboutCreate->title = $request->input('title');
          $aboutCreate->description = $request->input('description');
          if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/about/', $filename);
            $aboutCreate->image = $filename;
        }
          $aboutCreate->save();

          return redirect()->route('about.index')->with('message','About added successfully!!');
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
        $aboutEdit = About::findOrFail($id);
        return view('admin.pages.about.about_edit',compact('aboutEdit'));
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
            'title' => 'required',
            'description' => "required",
            'image' => 'required',
          ], [
            'title.required' => 'Please enter about title',
            'description.required' => 'Please enter about description',
            'image.required' => 'Please enter about image',
          ]);
        $aboutUpdate = About::findOrFail($id);
        $aboutUpdate->title = $request->input('title');
        $aboutUpdate->description = $request->input('description');
        if ($request->hasfile('image')) {
            $destination = 'uploads/about' . $aboutUpdate->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/about/', $filename);
            $aboutUpdate->image = $filename;
        }
        $aboutUpdate->save();
        return redirect()->route('about.index')->with('message', 'About updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutDestroy = About::findOrFail($id);
        $aboutDestroy->delete();
        return redirect()->route('about.index')->with('destory', 'Slider Deleted Successfully!');
    }
}
