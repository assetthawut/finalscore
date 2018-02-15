<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allquizs = DB::table('quiz')->get();
        return view('quiz.quizview',['allquizs'=>$allquizs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $allquizs = DB::table('quiz')->get();
        return view('quiz.quizform',['allquizs'=>$allquizs]);
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
        $quiz_create     = $request->input("quiz_create");
        $quiz_lastUpdate = $request->input("quiz_lastUpdate");
        $u_id            = $request->input("u_id");
        $quiz_subject    = $request->input("quiz_subject");
        $quiz_type       = $request->input("quiz_type");
        $quiz_grade      = $request->input("quiz_grade");
        $quiz_totalScore = $request->input("quiz_totalScore");
        
        DB::table('quiz')->insert(
            ["quiz_create" => $quiz_create,"quiz_lastUpdate" => $quiz_lastUpdate,"u_id" => $u_id,"quiz_subject" => $quiz_subject,"quiz_type" => $quiz_type,"quiz_grade" => $quiz_grade,"quiz_totalScore" => $quiz_totalScore]
            );
            
        return "store complete";
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
        $quizShow = DB::table('quiz')->where("quiz_id",$id)->get();
        return view('quiz.quizshow',['quizShow'=>$quizShow]);        
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
        $quizEdit = DB::table('quiz')->where("quiz_id",$id)->get();
        return view('quiz.quizedit',['quizEdit'=>$quizEdit]);         
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
        $quiz_create     = $request->input("quiz_create");
        $quiz_lastUpdate = $request->input("quiz_lastUpdate");
        $u_id            = $request->input("u_id");
        $quiz_subject    = $request->input("quiz_subject");
        $quiz_type       = $request->input("quiz_type");
        $quiz_grade      = $request->input("quiz_grade");
        $quiz_totalScore = $request->input("quiz_totalScore");

        DB::table("quiz")->where("quiz_id",$id)->update(
            ["quiz_create" => $quiz_create,"quiz_lastUpdate" => $quiz_lastUpdate,"u_id" => $u_id,"quiz_subject" => $quiz_subject,"quiz_type" => $quiz_type,"quiz_grade" => $quiz_grade,"quiz_totalScore" => $quiz_totalScore]   
        );

        return "edit success";
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
        DB::table("quiz")->where("quiz_id",$id)->delete();
        return "Delete Success";
    }
}
