<?php

use App\Http\Controllers\Member\Auth\AuthController;
use App\Http\Controllers\Member\HomeController;
use Illuminate\Support\Facades\Route;



Route::middleware('guest:member')->name('member.')->prefix('member')->group(function() {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');
});

Route::middleware('auth:member')->name('member.')->prefix('member')->group(function() {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});