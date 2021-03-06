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


Route::get('/', "App\Http\Controllers\userController@index");

Route::get("/profile/{id}/{email}", "App\Http\Controllers\userController@show");
Route::get("/welcome", "App\Http\Controllers\userController@welcome");


Route::get("/posts", "App\Http\Controllers\postsController@create");


// http://localhost:8000/welcome/?name=rizwanullah&address=karachi

// Route::get("/profile", function()
// {
//   return "Rizwan";
// });

// oute class k ander aik static method hy get
// forward slash home route
// per closure function hy jis me hy welcome