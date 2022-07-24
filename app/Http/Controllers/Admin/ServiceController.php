<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Serviec;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceList = Serviec::latest()->get();

        return view('admin.pages.service.service_list',compact('serviceList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.service.service_create');
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
            'card_title' => 'required',
            'card_description' => "required",
            'card_icon' => "required",
            'card_image' => 'required',
            'status' => 'required',
          ], [
            'card_title.required' => 'Please enter title',
            'card_description.required' => 'Please enter  description',
            'card_icon.required' => 'Please enter  description',
            'card_image.required' => 'Please enter image',
            'status.required' => 'Please enter status',
          ]);

          $serviceCreate = New Serviec();
          $serviceCreate->card_title = $request->input('card_title');
          $serviceCreate->card_description = $request->input('card_description');
          $serviceCreate->slug = SlugService::createSlug(Serviec::class, 'slug', $request->card_title);
          $serviceCreate->card_icon = $request->input('card_icon');
          if ($request->hasfile('card_image')) {
            $file = $request->file('card_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/service/', $filename);
            $serviceCreate->card_image = $filename;
        }
          $serviceCreate->status = $request->input('status') == true ? '1' : '0';
          $serviceCreate->save();

          return redirect()->route('service.index')->with('message','Service added successfully!!');
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
        $serviceEdit = Serviec::findOrFail($id);
        return view('admin.pages.service.service_edit',compact('serviceEdit'));
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
            'card_title' => 'required',
            'card_description' => "required",
            'card_icon' => "required",
            'status' => 'required',
          ], [
            'card_title.required' => 'Please enter title',
            'card_description.required' => 'Please enter  description',
            'card_icon.required' => 'Please enter  description',
            'status.required' => 'Please enter status',
          ]);

          $serviceUpdate =  Serviec::findOrFail($id);
          $serviceUpdate->card_title = $request->input('card_title');
          $serviceUpdate->card_description = $request->input('card_description');
          $serviceUpdate->slug = SlugService::createSlug(Serviec::class, 'slug', $request->card_title);
          $serviceUpdate->card_icon = $request->input('card_icon');
          if ($request->hasfile('card_image')) {
            $file = $request->file('card_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/service/', $filename);
            $serviceUpdate->card_image = $filename;
        }
          $serviceUpdate->status = $request->input('status') == true ? '1' : '0';
          $serviceUpdate->save();

          return redirect()->route('service.index')->with('message','Service added successfully!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serviceDestroy = Serviec::findOrFail($id);
        $serviceDestroy->delete();
        return redirect()->route('service.index')->with('destory', 'Service Deleted Successfully!');
    }
}
