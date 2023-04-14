<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Medicine;
use App\Models\Symptom;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function user()
    {
        // $user = User::all();
        return view('pages.dashboard');
    }

    public function admin()
    {
        $symptoms = Symptom::all();
        $diseases = Disease::all();
        $medicines = Medicine::all();
        $users = User::all();

        return view('components.admin.base', [
            'symptoms' => $symptoms,
            'diseases' => $diseases,
            'medicines' => $medicines,
            'users' => $users
        ]);
    }
}