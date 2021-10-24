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
Route::get("/profile/{id}/{mi}", function($id,$mi){
    // return view('profile');
    return $id+$mi;
});
// Route::get("/profile", function()
// {
//   return "Rizwan";
// });

// oute class k ander aik static method hy get
// forward slash home route
// per closure function hy jis me hy welcome