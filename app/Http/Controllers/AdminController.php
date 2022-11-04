<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\adminRequest;
use App\Http\Models\Admin;
class AdminController extends Controller
{
    //admin login function
    function adminLogin(adminRequest $req)
    {
        $credintials=['email'=>$req->email,'password'=>$req->password];
        if(\Auth::guard('admin')->attempt($credintials))
        {
            return view('admin.dashboard');
        }
        else{
            return back();
        }
    }
}
