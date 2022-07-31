<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\ClientTestimonial;

class ClientTestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientTestimonianlList = ClientTestimonial::latest()->get();
        return view('admin.pages.clientTestimonial.clientTestimonial_list',compact('clientTestimonianlList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.clientTestimonial.clientTestimonial_create');
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
            'client_name' => 'required',
            'client_image' => 'required',
            'designation' => 'required',
            'description' => "required",
            'rating' => 'required',
          ], [
            'client_name.required' => 'Please enter client name',
            'client_image.required' => 'Please enter client image',
            'designation.required' => 'Please enter client designation',
            'description.required' => 'Please enter client description',
            'rating.required' => 'Please enter client rating',
          ]);
          $testimonialCreate = New ClientTestimonial();
          $testimonialCreate->client_name = $request->input('client_name');
          $testimonialCreate->designation = $request->input('designation');
          $testimonialCreate->description = $request->input('description');
          $testimonialCreate->rating = $request->input('rating');
          if ($request->hasfile('client_image')) {
            $file = $request->file('client_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/clientTestimonial/', $filename);
            $testimonialCreate->client_image = $filename;
        }
          $testimonialCreate->save();

          return redirect()->route('clientTestimonial.index')->with('message','Client testimonial added successfully!!');
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
        $clientTestimonianlEdit = ClientTestimonial::findOrFail($id);
        return view('admin.pages.clientTestimonial.clientTestimonial_edit',compact('clientTestimonianlEdit'));
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
            'client_name' => 'required',
            'designation' => 'required',
            'description' => "required",
            'rating' => 'required',
            'status' => 'required',
          ], [
            'client_name.required' => 'Please enter client name',
            'designation.required' => 'Please enter client designation',
            'description.required' => 'Please enter client description',
            'rating.required' => 'Please enter client rating',
            'status.required' => 'Please enter status',
          ]);
          $testimonialUdate =  ClientTestimonial::findOrFail($id);
          $testimonialUdate->client_name = $request->input('client_name');
          $testimonialUdate->designation = $request->input('designation');
          $testimonialUdate->description = $request->input('description');
          $testimonialUdate->rating = $request->input('rating');
          if ($request->hasfile('client_image')) {
            $file = $request->file('client_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/clientTestimonial/', $filename);
            $testimonialUdate->client_image = $filename;
        }
          $testimonialUdate->status = $request->input('status') == true ? '1' : '0';
          $testimonialUdate->save();

          return redirect()->route('clientTestimonial.index')->with('message','Client testimonial update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonialDestroy = ClientTestimonial::findOrFail($id);
        $testimonialDestroy->delete();
        return redirect()->route('clientTestimonial.index')->with('destory', 'Client Testimonial Deleted Successfully!');
    }
}
