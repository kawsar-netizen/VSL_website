<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sliderList = DB::table('sliders')->get();
      return view('admin.pages.slider.slider_list',compact('sliderList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.slider.slider_create');
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
            'title' => 'required|unique:sliders,title',
            'description' => "required",
            'image' => 'required',
            'status' => 'required',
          ], [
            'title.required' => 'Please enter slider title',
            'description.required' => 'Please enter slider description',
            'image.required' => 'Please enter slider image',
            'status.required' => 'Please enter status',
          ]);

          $sliderCreate = New Slider();
          $sliderCreate->title = $request->input('title');
          $sliderCreate->description = $request->input('description');
          if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/slider/', $filename);
            $sliderCreate->image = $filename;
        }
          $sliderCreate->status = $request->input('status') == true ? '1' : '0';
          $sliderCreate->save();

          return redirect()->route('slider.index')->with('message','Slider added successfully!!');
          
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sliderDestroy = Slider::findOrFail($id);
        $sliderDestroy->delete();
        return redirect()->route('slider.index')->with('destory', 'Slider Deleted Successfully!');
    }
}
