<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        $credentials = Request::only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication was successful
            return redirect()->intended('/dashboard');
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
