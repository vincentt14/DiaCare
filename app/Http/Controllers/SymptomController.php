<?php

namespace App\Http\Controllers;

use App\Models\Symptom;
use App\Http\Requests\StoreSymptomRequest;
use App\Http\Requests\UpdateSymptomRequest;
use App\Models\Disease;
use App\Models\Medicine;
use App\Models\User;

class SymptomController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $symptoms = Symptom::orderBy('symptoms_code');
        $diseases = Disease::all();
        $medicines = Medicine::all();
        $users = User::all();

        return view('components.admin.symptoms.view', [
            'symptoms' => $symptoms->paginate(10),
            'diseases' => $diseases,
            'medicines' => $medicines,
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $symptoms = Symptom::all();
        $diseases = Disease::all();
        $medicines = Medicine::all();
        $users = User::all();

        return view('components.admin.symptoms.add', [
            'symptoms' => $symptoms,
            'diseases' => $diseases,
            'medicines' => $medicines,
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSymptomRequest $request)
    {
        $validatedData = $request->validate([
            'symptoms_code' => 'required',
            'symptoms' => 'required',
        ]);

        Symptom::create($validatedData);
        return redirect('/symptoms')->with('success', 'Symptom was added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Symptom $symptom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Symptom $symptom)
    {
        $symptoms = Symptom::all();
        $diseases = Disease::all();
        $medicines = Medicine::all();
        $users = User::all();

        return view('components.admin.symptoms.edit', [
            'symptom' => $symptom,
            'symptoms' => $symptoms,
            'diseases' => $diseases,
            'medicines' => $medicines,
            'users' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSymptomRequest $request, Symptom $symptom)
    {
        $rules = [
            'symptoms_code' => 'required',
            'symptoms' => 'required',
        ];

        $validatedData = $request->validate($rules);

        $symptom->update($validatedData);
        return redirect('/symptoms')->with('success', 'Symptom was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Symptom $symptom)
    {
        Symptom::destroy($symptom['id']);
        return redirect('/symptoms')->with('success', 'Symptom was deleted successfully');
    }
}