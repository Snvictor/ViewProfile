<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware('auth')->group(function () {
    // Routes that require email verification
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('dashboard/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/view-profile', [App\Http\Controllers\HomeController::class, 'userprofile']);
    Route::get('/dashboard/edit-profile', [App\Http\Controllers\HomeController::class, 'editprofile']);
    Route::put('/dashboard/edit-profile', [App\Http\Controllers\HomeController::class, 'update'])->name('update-profile');
});
