<?php

namespace App\Http\Controllers;

use App\Models\Medicine;

class MedicinesPage extends Controller
{
    public function index()
    {
        $medicines = Medicine::latest();

        if (request('search')) {
            $medicines->where('name', 'like', '%' . request('search') . '%');
        }

        return view('pages.medicinesPage', [
            'medicines' => $medicines->get()
        ]);
    }

}

// ->filter(request(['search']))->paginate(7)->withQueryString()
