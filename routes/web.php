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
    return view('welcome');
});
Route::get('/registerpage',function()
{
    return view('register');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/loginpage',function()
{
    return view('login');
});

Route::post('/register',[App\Http\Controllers\UserController::class,'register'])->name('register');
Route::post('/login',[App\Http\Controllers\UserController::class,'login'])->name('login');

