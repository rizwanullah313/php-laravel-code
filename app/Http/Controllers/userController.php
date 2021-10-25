<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function show($id, $email){
        $info = ["Rizwan", "rizwan@gmail.com",45,"Karachi"];
        $age = "10";
        return view('profile', ['myId' => $id, 'myEmail' => $email, 'info' => $info , 'age' => $age]);
    }

    public function welcome(){
        $name = request('name');
        $address = request("address");
        return $name . " === " . $address; 
    }
}
