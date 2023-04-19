<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Medicine;
use App\Models\Symptom;
use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $user = User::all();
        $disease = Disease::all();
        $medicine = Medicine::all();
        return view('pages.home', [
            "disease" => $disease,
            "user" => $user,
            "medicine" => $medicine
        ]);
    }

    public function diagnose(){
        $users = User::all();
        $symptoms = Symptom::all();
        $diseases = Disease::all();
        return view('pages.diagnose', [
            "symptoms" => $symptoms,
            "diseases" => $diseases
        ]);
    }

    public function medicine()
    {
        $medicines = Medicine::orderby('name');

        if (request('search')) {
            $medicines->where('name', 'like', '%' . request('search') . '%');
        }

        return view('pages.medicinesPage', [
            'medicines' => $medicines->paginate(8)->withQueryString()
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }
}