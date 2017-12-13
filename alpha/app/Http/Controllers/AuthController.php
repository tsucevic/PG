<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showLightLogin(){
    	return view("welcome");
    }

    public function showDarkLogin(){
    	return view("darkwelcome");
    }

    public function showLightRegister(){
    	return view("register");
    }

    public function showDarkRegister(){
    	return view("darkregister");
    }
}
