<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    //change website language
    function changeLanguage($locale)
    {
        session()->put('locale',$locale);
        return back();
    }
}
