<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Medicine;
use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $user = User::all();
        $disease = Disease::all();
        return view('pages.home', [
            "disease" => $disease,
            'user' => $user
        ]);
    }

    public function medicine()
    {
        $medicines = Medicine::latest();

        if (request('search')) {
            $medicines->where('name', 'like', '%' . request('search') . '%');
        }

        return view('pages.medicinesPage', [
            'medicines' => $medicines->paginate(8)
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }
}