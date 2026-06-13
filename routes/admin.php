<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SliderController;

//admin
Route::view('/admin', 'admin.layouts.index');