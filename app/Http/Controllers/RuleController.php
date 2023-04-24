<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use App\Http\Requests\StoreRuleRequest;
use App\Http\Requests\UpdateRuleRequest;
use App\Models\Disease;
use App\Models\Medicine;
use App\Models\Symptom;
use App\Models\User;



// STEP 1 query DONE
// ambil semua penyakit
// ambil semua gejala
// ambil semua rules


// STEP 2 
// objek = {
//   "negative" = [ 1, 0 , 1, 0, 1, 0],
//   "diabetes1" = [0, 0, 0, 0, 1, 1],
//   "diabetes2" = [0, 0, 0, 0, 1, 1],
//   "diabetes3" = [0, 0, 0, 0, 1, 1],
// }


class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rules = Rule::all();
        $symptoms = Symptom::all();
        $diseases = Disease::all();
        $symptomsInfo = Symptom::all();
        $diseasesInfo = Disease::all();
        $medicinesInfo = Medicine::all();
        $usersInfo = User::all();

        return view('components.admin.rules.view', [
            'rules' => $rules,
            'symptoms' => $symptoms,
            'diseases' => $diseases,
            'symptomsInfo' => $symptomsInfo,
            'diseasesInfo' => $diseasesInfo,
            'medicinesInfo' => $medicinesInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRuleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Rule $rule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rule $rule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRuleRequest $request, Rule $rule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rule $rule)
    {
        //
    }
}
