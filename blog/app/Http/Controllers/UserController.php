<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
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

    function userHome(){
        return view('home');
    }
    // function userAbout(){
    //     return view('about');
    // }
}
