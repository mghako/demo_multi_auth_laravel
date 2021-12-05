<?php

namespace App\Http\Controllers\Member\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('member.login');
    }

    public function authenticate(Request $request) {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::guard('member')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('member.home');
        }

        return back()->withErrors([
            'message' => 'Wrong credentials !',
        ]);
    }

    public function logout() {
        Auth::guard('member')->logout();
        return redirect()->route('welcome');
    }
}
