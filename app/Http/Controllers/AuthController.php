<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();

            $redirectLink = '/';
            if(Auth::user()->is_admin == 1)
            $redirectLink = '/adminDashboard';
            
            return redirect()->intended($redirectLink)->with('success', 'Logged in successfully as ' . Auth::user()->name);
        }
        return back()->with('error', 'Login failed, please check your credentials');
    }

    public function register()
    {
        return view('pages.register');
    }

    public function store(Request $request)
    {
        // 
    }

    public function logout(Request $request)
    {
        // dd($request);
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Logged out successfully');
    }
}