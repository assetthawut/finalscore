<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    //

    public function index(){

    	return view('uploadform.up');
    }

    public function store(Request $request){
    	 $path =$request->file('fileUpload')->storeAs('public/testfolder','upload.jpg');
    	 //$img = asset('/fileA/test.jpg');
    	 //$imgurl = Storage::url('test.jpg');
    	 return "success";
    }

    public function show(){

    	$testimgurl = Storage::url('public/testfolder/upload.jpg');
    	return "<img src='".$testimgurl."' width='30%' height='30%'>";
        //return $testimgurl;
    }	
}
