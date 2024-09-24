<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[UserController::class,"login"]);

Route::post('/login',[UserController::class,"u_login"])->name("u_login");

Route::get('/register',[UserController::class,"register"]);

Route::post('/register',[UserController::class,"u_register"])->name("u_register");
