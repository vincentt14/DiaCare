<?php

namespace App\Http\Controllers;

use App\Models\Symptom;
use App\Http\Requests\StoreSymptomRequest;
use App\Http\Requests\UpdateSymptomRequest;

class SymptomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $symptoms = Symptom::orderBy('symptoms_code');

        return view('components.admin.symptoms.view', [
            'symptoms' => $symptoms->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.admin.symptoms.add');
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
        return redirect('/symptoms');
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
        return view('components.admin.symptoms.edit', [
            'symptom' => $symptom
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSymptomRequest $request, Symptom $symptom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Symptom $symptom)
    {
        Symptom::destroy($symptom['id']);
        return redirect('/symptoms');
    }
}