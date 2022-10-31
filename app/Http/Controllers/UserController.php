<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Models\User;

class UserController extends Controller
{
    //regiser function
     function register(Request $req)
     {
    $req->validate([
        'name'=>'required',
        'email'=>'required|unique:users',
        'password'=>'required|min:8',
        'repassword'=>'required|same:password'
    ]);

        $user=User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>bcrypt($req->password)
        ]);


    return view('home');
     }
     ##########################################################################

     //Login function

     function login(Request $req)
     {
        $req->validate([

            'email'=>'required',
            'password'=>'required|min:8'
        ]);

         $credintials=array('email'=>$req->email,"password"=>$req->password);

         if(Auth::attempt($credintials))
         {
            return view('home');
         }
         else{
            return back()->with('error','incorrect email or password');
         }


     }
}
