<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//user
Route::get('/login',[UserController::class,"login"]);

Route::post('/login',[UserController::class,"u_login"])->name("u_login");

Route::get('/register',[UserController::class,"register"]);

Route::post('/register',[UserController::class,"u_register"])->name("u_register");


//product
Route::get('/product',[productController::class,"product"])->name("product");

Route::get('/showproduct/{id}',[productController::class,"showproduct"])->name("product.show");
