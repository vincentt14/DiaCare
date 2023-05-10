<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use App\Http\Requests\StoreSolutionRequest;
use App\Http\Requests\UpdateSolutionRequest;
use App\Models\Disease;
use App\Models\Medicine;
use App\Models\Symptom;
use App\Models\User;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $diseasesInfo = Disease::all();
        $symptomsInfo = Symptom::all();
        $medicinesInfo = Medicine::all();
        $usersInfo = User::all();

        return view('components.admin.solutions.add', [
            'diseasesInfo' => $diseasesInfo,
            'symptomsInfo' => $symptomsInfo,
            'medicinesInfo' => $medicinesInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSolutionRequest $request)
    {
        $validatedData = $request->validate([
            'disease_id' => 'required',
            'solution' => 'required'
        ]);

        Solution::create($validatedData);
        return redirect('/diseases')->with('success', 'Solution was added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Solution $solution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Solution $solution)
    {
        $diseasesInfo = Disease::all();
        $symptomsInfo = Symptom::all();
        $medicinesInfo = Medicine::all();
        $usersInfo = User::all();

        return view('components.admin.solutions.edit', [
            'solution' => $solution,
            'diseasesInfo' => $diseasesInfo,
            'symptomsInfo' => $symptomsInfo,
            'medicinesInfo' => $medicinesInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSolutionRequest $request, Solution $solution)
    {
        $rules = [
            'disease_id' => 'required',
            'solution' => 'required',
        ];

        $validatedData = $request->validate($rules);

        $solution->update($validatedData);
        return redirect('/diseases')->with('success', 'Solution was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Solution $solution)
    {
        Solution::destroy($solution['id']);
        return redirect('/diseases')->with('success', 'Solution was deleted successfully');
    }
}
