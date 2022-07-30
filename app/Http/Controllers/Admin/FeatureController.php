<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featureList = Feature::latest()->get();
        return view('admin.pages.feature.feature_list',compact('featureList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.feature.feature_create');
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
            'tab_name' => 'required',
            'tab_description' => "required",
            'tab_icon' => "required",
            'image' => 'required',
   
          ], [
            'tab_name.required' => 'Please enter title',
            'tab_description.required' => 'Please enter  description',
            'tab_icon.required' => 'Please enter  description',
            'image.required' => 'Please enter image',
          
          ]);

          $featureCreate = New Feature();
          $featureCreate->tab_name = $request->input('tab_name');
          $featureCreate->tab_description = $request->input('tab_description');
          $featureCreate->tab_icon = $request->input('tab_icon');
          if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/feature/', $filename);
            $featureCreate->image = $filename;
        }
          $featureCreate->save();

          return redirect()->route('feature.index')->with('message','Feature added successfully!!');
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
        $featureEdit = Feature::findOrFail($id);
        return view('admin.pages.feature.feature_edit',compact('featureEdit'));
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
            'tab_name' => 'required',
            'tab_description' => "required",
            'tab_icon' => "required",
   
          ], [
            'tab_name.required' => 'Please enter title',
            'tab_description.required' => 'Please enter  description',
            'tab_icon.required' => 'Please enter  description',
          
          ]);

          $featureCreate = Feature::findOrFail($id);
          $featureCreate->tab_name = $request->input('tab_name');
          $featureCreate->tab_description = $request->input('tab_description');
          $featureCreate->tab_icon = $request->input('tab_icon');
          if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/feature/', $filename);
            $featureCreate->image = $filename;
        }
        $featureCreate->status = $request->input('status') == true ? '1' : '0';
          $featureCreate->save();

          return redirect()->route('feature.index')->with('message','Feature updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $featureDestroy = Feature::findOrFail($id);
        $featureDestroy->delete();
        return redirect()->route('feature.index')->with('destory', 'Feature Deleted Successfully!');
    }
}
