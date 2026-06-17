<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\RoleController;

Route::resource('teacher', TeacherController::class);