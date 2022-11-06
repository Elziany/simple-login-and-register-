<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/registerpage',function()
{
    return view('register');
})->name('registerpage');


Route::get('/posts',function()
{
    return view('posts');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/loginpage',function()
{
    return view('login');
})->name('loginpage');

Route::get('/loginadmin',function()
{
    return view('admin.adminLogin');
});

Route::post('/register',[App\Http\Controllers\UserController::class,'register'])->name('register');
Route::post('/login',[App\Http\Controllers\UserController::class,'login'])->name('login');
Route::post('/adminLogin',[App\Http\Controllers\AdminController::class,'adminLogin'])->name('adminLogin');
Route::get('/changeLang/{locale}',[App\Http\Controllers\LangController::class,'changeLanguage'])->name('changeLang');

#############post Routes#########
Route::post('/createpost',[App\Http\Controllers\PostController::class,'create_post'])->name('create_post');
