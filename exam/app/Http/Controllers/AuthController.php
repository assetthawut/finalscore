<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Auth;
use App\user;
class AuthController extends Controller
{
    //
    public function redirectToProvider(){

    	return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback(){

    	$user = Socialite::driver('facebook')->user();

    	$find = user::whereEmail($user->email)->first();

    	if($find){
    		Auth::login($find);
    		
    		return view("home");
    	}else{

			$newUser 			= new user;
			$newUser->name  	= $user->name;
			$newUser->email 	= $user->email;
			$newUser->password 	= bcrypt(1234567);
			$newUser->save(); 
			Auth::login($find);

 			return  view('home');

    	}




    	    	//return view("home");



    }
}
