<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Http\Requests\StoreDiseaseRequest;
use App\Http\Requests\UpdateDiseaseRequest;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diseases = Disease::orderBy('diseases_code');

        return view('components.admin.diseases.view', [
            'diseases' => $diseases->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.admin.diseases.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiseaseRequest $request)
    {
        $validatedData = $request->validate([
            'diseases_code' => 'required',
            'diseases' => 'required',
        ]);

        Disease::create($validatedData);
        return redirect('/diseases')->with('success', 'Diseases was added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Disease $disease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disease $disease)
    {
        return view('components.admin.diseases.edit', [
            'disease' => $disease
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiseaseRequest $request, Disease $disease)
    {
        $rules = [
            'diseases_code' => 'required',
            'diseases' => 'required',
        ];

        $validatedData = $request->validate($rules);

        $disease->update($validatedData);
        return redirect('/diseases')->with('success', 'Diseases was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disease $disease)
    {
        Disease::destroy($disease['id']);
        return redirect('/diseases')->with('success', 'Diseases was deleted successfully');
    }
}