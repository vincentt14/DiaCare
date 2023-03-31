<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }

    public function authenticate(Request $request)
    {
        // 
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
        // 
    }
}