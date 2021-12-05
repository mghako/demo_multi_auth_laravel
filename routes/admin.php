<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;



Route::middleware('guest:admin')->name('admin.')->prefix('admin')->group(function() {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');
});

Route::middleware('auth:admin')->name('admin.')->prefix('admin')->group(function() {
    Route::get('home', [HomeController::class, 'index'])->name('home');

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});