<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        return 'hi i am alex';
    }
    function aboutUser($name){
        return "hellow, this is ".$name;
    }
}
