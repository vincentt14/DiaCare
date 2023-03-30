<?php

namespace App\Http\Controllers;

use App\Models\Symptoms;
use App\Http\Requests\StoreSymptomsRequest;
use App\Http\Requests\UpdateSymptomsRequest;

class SymptomsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $symptoms = Symptoms::orderBy('symptoms_code');

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
    public function store(StoreSymptomsRequest $request)
    {
        $validatedData = $request->validate([
            'symptoms_code' => 'required',
            'symptoms' => 'required',
        ]);

        Symptoms::create($validatedData);
        return redirect('/symptoms');
    }

    /**
     * Display the specified resource.
     */
    public function show(Symptoms $symptoms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Symptoms $symptoms)
    {
        return view ('components.admin.symptoms.edit', [
            'symptoms' => $symptoms
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSymptomsRequest $request, Symptoms $symptoms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Symptoms $symptoms)
    {
        Symptoms::destroy($symptoms['id']);
        return redirect('/symptoms');
    }
}