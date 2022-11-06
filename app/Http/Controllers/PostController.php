<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\postRequest;
use App\Models\Post;

class PostController extends Controller
{
    //check if user is authunticated or not
    public function __construct()
    {
    $this->middleware('auth');
    }

    ########create new post ############

    function create_post(postRequest $req)
    {
Post::create([
    'user_id'=>auth()->user()->id,
    'title'=>$req->title,
    'body'=>$req->body
]);
return redirect()->back();

    }
    #######################################

}
