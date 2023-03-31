<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function user()
    {
        return view('pages.dashboard');
    }

    public function admin()
    {
        return view('components.admin.base');
    }
}