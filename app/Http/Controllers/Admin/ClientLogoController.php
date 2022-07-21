<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\ClientLogo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ClientLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientLogo = ClientLogo::latest()->get();
        return view('admin.pages.clientLogo.clientLogo_list',compact('clientLogo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.clientLogo.clientLogo_create');
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
            'title' => 'required|max:50',
            'image' => 'required',
            'status' => 'required',
          ], [
            'title.required' => 'Please enter client logo title',
            'image.required' => 'Please enter client logo image',
            'status.required' => 'Please enter status',
          ]);

          $clientLogoCreate = New ClientLogo();
          $clientLogoCreate->title = $request->input('title');
          if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/clientLogo/', $filename);
            $clientLogoCreate->image = $filename;
        }
          $clientLogoCreate->status = $request->input('status') == true ? '1' : '0';
          $clientLogoCreate->save();

          return redirect()->route('clientLogo.index')->with('message','Client logo added successfully!!');
          
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
        $clientEdit = ClientLogo::findOrFail($id);
        return view('admin.pages.clientLogo.clientLogo_edit',compact('clientEdit'));
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
            'status' => 'required',
          ], [
            'title.required' => 'Please enter client Logo title',
            'status.required' => 'Please enter status',
          ]);
        $clientLogoUpdate = ClientLogo::findOrFail($id);
        $clientLogoUpdate->title = $request->input('title');
        if ($request->hasfile('image')) {
            $destination = 'uploads/clientLogo' . $clientLogoUpdate->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/clientLogo/', $filename);
            $clientLogoUpdate->image = $filename;
        }
        $clientLogoUpdate->status = $request->input('status') == true ? '1' : '0';
        $clientLogoUpdate->save();
        return redirect()->route('clientLogo.index')->with('message', 'Client logo updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientLogoDestroy = ClientLogo::findOrFail($id);
        $clientLogoDestroy->delete();
        return redirect()->route('clientLogo.index')->with('destory', 'Client Logo Deleted Successfully!');
    }
}
