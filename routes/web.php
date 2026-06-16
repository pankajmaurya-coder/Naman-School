<?php
require __DIR__.'/admin.php';
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SliderController;

//View Routes
Route::view('/signup','auth.signup')->name('signup');
Route::view('/login', 'auth.login')->name('login');
Route::view('/dashboard', 'admin.layouts.index')->name('dashboard');
Route::view('/slider', 'admin.slider.add')->name('slider');



 Route::get('/', [SliderController::class, 'list'])->name('slider.index');


//auth
Route::post('/signup', [UserController::class, 'signup'])->name('signup.process');
Route::post('/login', [UserController::class, 'login'])->name('login.process');

