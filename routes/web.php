<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $guardResult = activeGuard();

    if($guardResult == "admin") return redirect()->route('admin.home');

    if($guardResult == "member") return redirect()->route('member.home');

    return view('welcome');
    
})->name('welcome');
