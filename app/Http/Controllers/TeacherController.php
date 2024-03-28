<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teachers=teacher::all();
        return view("teacher")->with("teachers",$teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $teacher=new teacher;
        $teacher->full_name=$request->input("name");
        $teacher->birth_date=$request->input("birth_date");
        $teacher->gender=$request->input("gender");
//        $teacher->group_id=$request->input("group");
        $teacher->email=$request->input("email");
        $teacher->password=$request->input("password");
//        $teacher->image=$request->input("image");
        $teacher->save();
        return redirect("teachers");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,teacher $teacher)
    {
        //
        $teacher=teacher::find($teacher->id);
        $teacher->full_name=$request->input("name");
        $teacher->birth_date=$request->input("birth_date");
        $teacher->gender=$request->input("gender");
//        $teacher->group_id=$request->input("group");
        $teacher->email=$request->input("email");
        $teacher->password=$request->input("password");
        $teacher->save();
        return redirect("teachers");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(teacher $teacher)
    {
        //
        $teacher=teacher::find($teacher->id);
        $teacher->delete();
        return redirect("teachers");
     }
}
