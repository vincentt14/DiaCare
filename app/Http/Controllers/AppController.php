<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $diabetes_types = [
            [
                "id" => 1,
                "slug" => "Type 1",
                "name" => "Diabetes Mellitus 1",
                "description" => "Type 1 diabetes is thought to be caused by an autoimmune reaction (the body attacks itself by mistake). This reaction stops your body from making insulin. Approximately 5-10% of the people who have diabetes have type 1. Symptoms of type 1 diabetes often develop quickly. It’s usually diagnosed in children, teens, and young adults. If you have type 1 diabetes, you’ll need to take insulin every day to survive. Currently, no one knows how to prevent type 1 diabetes."
            ],
            [
                "id" => 2,
                "slug" => "Type 2",
                "name" => "Diabetes Mellitus 2",
                "description" => "With type 2 diabetes, your body doesn’t use insulin well and can’t keep blood sugar at normal levels. About 90-95% of people with diabetes have type 2. It develops over many years and is usually diagnosed in adults (but more and more in children, teens, and young adults). You may not notice any symptoms, so it’s important to get your blood sugar tested if you’re at risk."
            ],
            [
                "id" => 3,
                "slug" => "Gestational",
                "name" => "Gestational Diabetes",
                "description" => "Gestational diabetes develops in pregnant women who have never had diabetes. If you have gestational diabetes, your baby could be at higher risk for health problems. Gestational diabetes usually goes away after your baby is born. However, it increases your risk for type 2 diabetes later in life. Your baby is more likely to have obesity as a child or teen and develop type 2 diabetes later in life."
            ],
        ];

        return view('pages.home', [
            "types" => $diabetes_types,
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