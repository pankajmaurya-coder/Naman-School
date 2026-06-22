<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\RoleController;

Route::resource('teacher', TeacherController::class);
Route::resource('student', TeacherController::class);


Route::view('/info','web.layouts.info');

Route::view('/comp', 'web.components.achivment');