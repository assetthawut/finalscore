<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = DB::select('select * from role');
        return view('roleview',['roles'=>$roles]);
        //return "Hi";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return  view('roleform');
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
        /*
            $name = $request->input('stud_name');
            DB::insert('insert into student (name) values(?)',[$name]);
            echo "Record inserted successfully.<br/>";
            echo '<a href = "/insert">Click Here</a> to go back.';
        */
            $roleid = $request->input('roleId');
            $rolename = $request->input('roleName'); 
             DB::table('role')->insert([
                                         ['roleId' => $roleid, 'roleName' => $rolename]
                                      ]);
            //return $roleid.$rolename;
            //return "Hi";
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
        $role = DB::select("select * from role where roleId = ".$id);
        return view('updaterole',['role'=>$role]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        //
        $roleid = $request->input('roleId');
        $rolename = $request->input('roleName');

        echo $roleid.$rolename;
        //return ;
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
        $roleid = $request->input('roleId');
        $rolename = $request->input('roleName');
        DB::table('role')
            ->where('roleId', $roleid)
            ->update(['roleName' => $rolename]);
        echo "update Success";
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
    }
}
