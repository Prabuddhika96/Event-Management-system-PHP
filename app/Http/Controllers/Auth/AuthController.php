<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    // use AuthenticatesUsers;

    // protected $redirectTo = '/';

    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function login()
    {
        $data = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);
        if (auth()->attempt(['email' => $data['email'], 'password' => $data['password']])) {
            // Authentication passed, redirect the user
            $authenticatedUser = auth()->user();

            $userDataJson = json_encode($authenticatedUser);

            return view('home.home')->with('userDataJson', $userDataJson);
        } else {
            // Authentication failed, return an error
            return redirect('/login')->with('err-msg', 'Invalid login credentials');
        }
    }
}
