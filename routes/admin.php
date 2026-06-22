<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\Dashboard;

// Route::view('/admin', 'admin.layouts.index');
Route::get('/admin', [Dashboard::class, 'index'])->name('admin');
   
 
Route::middleware(['auth','admin'])->prefix('slider')->name('slider.')->group(function () {
   //slider
    Route::get('/dashboard', [SliderController::class,'index'])->name('dashboard');
   Route::post('/store', [SliderController::class, 'store'])->name('store');
   Route::get('/list', [SliderController::class, 'index'])->name('list');
   Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('edit');
   Route::put('/update/{id}', [SliderController::class, 'update'])->name('update');
   Route::delete('/delete/{id}', [SliderController::class, 'delete'])->name('delete');
});
