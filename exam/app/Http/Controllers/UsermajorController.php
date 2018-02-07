<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UsermajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $usermajors = DB::table('user_major')->get();
        $samples = array('a','b','c');
        return view('usermajor.usermajorview',['usermajors'=>$usermajors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usermajor.usermajorform');
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
        $m_nameInput = $request->input('m_name');
        DB::table('user_major')->insert(['m_name' => $m_nameInput]);

        //$usermajors = DB::table('user_major')->get();
        //return view('usermajor.usermajorview',['usermajors'=>$usermajors]);
        //error because still in store method
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //DB::table('roleuser')->where('r_id',$id)->get();
        $usermajorItem = DB::table('user_major')->where('m_id',$id)->get();
        return view('usermajor.usermajorshow',['usermajorItem'=>$usermajorItem]);
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
            $usermajorItem = DB::table('user_major')->where('m_id',$id)->get();
            return view('usermajor.usermajoredit',['usermajorItem'=>$usermajorItem]);

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
        /*
DB::table('users')
            ->where('id', 1)
            ->update(['votes' => 1]);
        */
        $m_nameEdit = $request->input('m_name');
        DB::table('user_major')->where('m_id',$id)->update(['m_name'=>$m_nameEdit]);
        return "Ok updated!!! <a href='/usermajor'> back  to homepage</a>";

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
        DB::table('user_major')->where('m_id', $id)->delete();
        return "delete <a href='/usermajor'>Back to homepage</a>";
    }
}
