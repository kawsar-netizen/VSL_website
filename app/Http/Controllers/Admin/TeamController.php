<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamList = Team::all();

        return view('admin.pages.team.team_list',compact('teamList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.team.team_create');
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
            'emp_name' => 'required',
            'emp_designation' => "required",
            'image' => 'required',
          ], [
            'emp_name.required' => 'Please enter employee name',
            'emp_designation.required' => 'Please enter employee designation',
            'image.required' => 'Please enter employee image',
          ]);

          $teamCreate = New Team();
          $teamCreate->emp_name = $request->input('emp_name');
          $teamCreate->emp_designation = $request->input('emp_designation');
          if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/team/', $filename);
            $teamCreate->image = $filename;
        }
          $teamCreate->save();

          return redirect()->route('team.index')->with('message','Team member added successfully!!');
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
        $teamEdit = Team::findOrFail($id);
        return view('admin.pages.team.team_edit',compact('teamEdit'));
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
            'emp_name' => 'required',
            'emp_designation' => "required",
   
          ], [
            'emp_name.required' => 'Please enter employee name',
            'emp_designation.required' => 'Please enter employee designation',

          ]);
        $teamUpdate = Team::findOrFail($id);
        $teamUpdate->emp_name = $request->input('emp_name');
        $teamUpdate->emp_designation = $request->input('emp_designation');
        if ($request->hasfile('image')) {
            $destination = 'uploads/team' . $teamUpdate->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/team/', $filename);
            $teamUpdate->image = $filename;
        }
        $teamUpdate->status = $request->input('status') == true ? '1' : '0';
        $teamUpdate->save();
        return redirect()->route('team.index')->with('message', 'Team member updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teamDestroy = Team::findOrFail($id);
        $teamDestroy->delete();
        return redirect()->route('team.index')->with('destory', 'Team Deleted Successfully!');
    }
}
