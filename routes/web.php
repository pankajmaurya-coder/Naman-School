<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SliderController;

// Route::view('/', 'web.index');
Route::view('/signup','auth.signup')->name('signup');
Route::view('/login', 'auth.login')->name('login');
Route::view('/dashboard', 'admin.dashboard');
Route::view('/slider', 'admin.slider')->name('slider');

Route::get('/', [SliderController::class, 'list'])->name('slider.index');

//slider
Route::middleware(['auth','admin'])->prefix('slider')->name('slider.')->group(function () {
   Route::post('/store', [SliderController::class, 'store'])->name('store');
   Route::get('/list', [SliderController::class, 'index'])->name('list');
});



//auth
Route::post('/signup', [UserController::class, 'signup'])->name('signup.process');
Route::post('/login', [UserController::class, 'login'])->name('login.process');

//admin
Route::view('/admin', 'admin.layouts.index');