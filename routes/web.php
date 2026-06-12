<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SliderController;

// Route::view('/', 'web.index');
Route::view('/signup','auth.signup');
Route::view('/login', 'auth.login');
Route::view('slider', 'admin.slider');

//auth
Route::post('/signup', [UserController::class, 'signup'])->name('signup.process');
Route::post('/login', [UserController::class, 'login'])->name('login.process');

//slider
Route::post('/slider', [SliderController::class, 'store'])->name('slider.store');
Route::get('/', [SliderController::class, 'list'])->name('slider');