<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RoleuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roleusers = DB::table('roleuser')->get();
        return view('roleuser.roleuserview', ['roleusers' => $roleusers]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //redirect to form page
        return view('roleuser.roleuserform');

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
        $roleuser = $request->input("r_name");
        //Save to Database 
        DB::table('roleuser')->insert(['r_name'=>$roleuser]);
        //return view('roleuser.roleuserview');
        //return "<a href='/roleuser'>back</a>";
       //return redirect('/roleuser');
        return "Success <a href='/roleuser'>back to roleuserlist</a>";
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
        $roleuserItem = DB::table('roleuser')->where('r_id',$id)->get();
        return view('roleuser.roleusershow',['roleuserItem'=>$roleuserItem]);
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
        $roleuserItem = DB::table('roleuser')->where('r_id',$id)->get();
        return view('roleuser.roleuseredit',['roleuserItem'=>$roleuserItem]);
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
        $r_nameUpdate = $request->input('r_name');
        DB::table('roleuser')->where('r_id', $id)->update(['r_name' => $r_nameUpdate]);
        return "Success <a href='/roleuser'>back to roleuserlist</a>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('roleuser')->where('r_id',$id)->delete();
        return "delete Success <a href='/roleuser'>back to roleuserlist</a>";
    }
}
