<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('home','home');
// Route::view('about','about');

// Route::get('user-home',[UserController::class, 'userHome']);
// Route::get('user-about',[UserController::class, 'userAbout']);

// Route::get('user', [UserController::class, 'getUser']);
// Route::get('about/{name}', [UserController::class, 'aboutUser']);
// Route::get('admin-login', [UserController::class, 'adminLogin']);

Route::view('user-form','user-form');
Route::post('addUser', [UserController::class, 'addUser']);