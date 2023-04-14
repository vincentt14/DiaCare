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
        $symptomsInfo = Symptom::all();
        $diseasesInfo = Disease::all();
        $medicinesInfo = Medicine::all();
        $usersInfo = User::all();

        return view('components.admin.base', [
            'symptomsInfo' => $symptomsInfo,
            'diseasesInfo' => $diseasesInfo,
            'medicinesInfo' => $medicinesInfo,
            'usersInfo' => $usersInfo
        ]);
    }
}