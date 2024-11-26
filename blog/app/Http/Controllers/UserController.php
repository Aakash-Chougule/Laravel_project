<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

function addUser(Request $request){
    // echo $request;
    // return $request;
    echo "user name is : $request->username";
    echo "<br/>";
    echo "user city is : $request->city";
    echo "<br/>";
    echo "user email is : ".$request -> input('email');
    // echo "user email is : $request -> email";
    
}






    // function getUser(){
    //     //return 'hi i am alex';
    //     return view('user');
    // }
    // function aboutUser($name){
    //     //return "hellow, this is ".$name;
    //     return view('about', ['name' => $name]);
    // }
    // function adminLogin(){
    //     return view('admin.login');
    // }

    // function userHome(){
    //     return view('home');
    // }
    // function userAbout(){
    //     return view('about');
    // }
}
