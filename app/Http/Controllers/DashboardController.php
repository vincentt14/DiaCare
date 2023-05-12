<?php

namespace App\Http\Controllers;

use App\Models\DiagnoseResult;
use App\Models\Disease;
use App\Models\Medicine;
use App\Models\Solution;
use App\Models\Symptom;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function user()
    {
        $diagnoseResults = DiagnoseResult::all();
        $diseases = Disease::all();
        $medicines = Medicine::all();
        $solutions = Solution::all();
        return view('pages.dashboard', [
            'diagnoseResults' => $diagnoseResults,
            'diseases' => $diseases,
            'medicines' => $medicines,
            'solutions' => $solutions
        ]);
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