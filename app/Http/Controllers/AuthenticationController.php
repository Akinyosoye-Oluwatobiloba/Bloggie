<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function register(Request $request){

    }
    public function login (){
        return redirect('/');
    }
}
