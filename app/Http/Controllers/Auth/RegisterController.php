<?php

namespace App\Http\Controllers\Auth;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }
    public function create(Request $request){
        $request->validate([
           'firstname'=>'required|string',
           'lastname'=>'required|string',
           'email' =>'required|string|email|',
           'password'=> 'required', 'confirmed',
        ]);

        $user = User::create([
           'firstname'=>$request->firstname,

           'lastname'=>$request->lastname,

           'email'=>$request->email,

           'password'=>Hash::make($request->password),

           //status is manually changed to '1'
        ]);



            //
            //

            return redirect('/');
    }

}
