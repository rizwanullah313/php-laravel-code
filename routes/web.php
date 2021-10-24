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
Route::get("/profile/{id}/{email}", function($id,$email){
    $info = ["Rizwan", "rizwan@gmail.com",45,"Karachi"];
    $age = "10";
    return view('profile', ['myId' => $id, 'myEmail' => $email, 'info' => $info , 'age' => $age]);
    // return $id+$mi;
});
Route::get("/welcome", function(){
  $name = request('name');
  $address = request("address");
  return $name . " === " . $address;
});
// http://localhost:8000/welcome/?name=rizwanullah&address=karachi

// Route::get("/profile", function()
// {
//   return "Rizwan";
// });

// oute class k ander aik static method hy get
// forward slash home route
// per closure function hy jis me hy welcome