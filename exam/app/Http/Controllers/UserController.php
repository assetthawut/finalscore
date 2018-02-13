<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allusers = DB::table('user')->get();
       // return $allusers;
       return  view('user.userview',['allusers'=>$allusers]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return form
        return view('user.userform');
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
       // $user_id    = $request->input('user_id'); autonicement.
        $u_username = $request->input('u_username');
        $u_password = $request->input('u_password');
        $u_name     = $request->input('u_name');
        $u_surname  = $request->input('u_surname');
        $u_birthdate  = $request->input('u_birthdate');
        $u_img      = $request->input('u_img');
        $r_id       = $request->input('r_id');
        $m_id       = $request->input('m_id');
        
        DB::table('user')->insert(
            ['u_username' => $u_username,'u_password'=>$u_password,'u_name'=>$u_name,'u_surname'=>$u_surname,'u_birthdate'=>$u_birthdate,'u_img'=>$u_img,'r_id'=>$r_id,'m_id'=>$m_id]
            );
        return  "done!!!";

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

        $usershow = DB::table('user')->where('user_id',$id)->get();
        return  view('user.usershow',['usershow'=>$usershow]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usershow = DB::table('user')->where('user_id',$id)->get();
        return  view('user.useredit',['usershow'=>$usershow]);
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
        $u_username = $request->input('u_username');
        $u_password = $request->input('u_password');
        $u_name     = $request->input('u_name');
        $u_surname  = $request->input('u_surname');
        $u_birthdate  = $request->input('u_birthdate');
        $u_img      = $request->input('u_img');
        $r_id       = $request->input('r_id');
        $m_id       = $request->input('m_id');

        if($u_img == null){ $u_img = "defaut.jpg"; }

        DB::table('user')->where('user_id',$id)->update(
            ['u_username' => $u_username,'u_password'=>$u_password,'u_name'=>$u_name,'u_surname'=>$u_surname,'u_birthdate'=>$u_birthdate,'u_img'=>$u_img,'r_id'=>$r_id,'m_id'=>$m_id]
            );
        return "ok update";
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
        db::table('user')->where('user_id',$id)->delete();
        return "Delete OK";
    }
}
