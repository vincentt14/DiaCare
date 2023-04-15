<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Http\Requests\StoreMedicineRequest;
use App\Http\Requests\UpdateMedicineRequest;
use App\Models\Disease;
use App\Models\Symptom;
use App\Models\User;

class MedicineController extends Controller
{
    public function __construct(){
        $this->middleware('admin')->except(['show']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicines = Medicine::orderby('name');
        $medicinesInfo = Medicine::all();
        $diseasesInfo = Disease::all();
        $symptomsInfo = Symptom::all();
        $usersInfo = User::all();

        if (request('search')){
            $medicines->where('name', 'like', '%' . request('search') . '%');
        }

        return view('components.admin.medicines.view', [
            'medicines' => $medicines->paginate(10)->withQueryString(),
            'medicinesInfo' => $medicinesInfo,
            'diseasesInfo' => $diseasesInfo,
            'symptomsInfo' => $symptomsInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicinesInfo = Medicine::all();
        $diseasesInfo = Disease::all();
        $symptomsInfo = Symptom::all();
        $usersInfo = User::all();

        return view('components.admin.medicines.add', [
            'medicinesInfo' => $medicinesInfo,
            'diseasesInfo' => $diseasesInfo,
            'symptomsInfo' => $symptomsInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMedicineRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'composition' => 'required',
            'dose' => 'required',
        ]);

        Medicine::create($validatedData);
        return redirect('/medicines')->with('success', 'Medicine was added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
    {
        return view('pages.medDetail', [
            'medicine' => $medicine
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicine $medicine)
    {
        $medicinesInfo = Medicine::all();
        $diseasesInfo = Disease::all();
        $symptomsInfo = Symptom::all();
        $usersInfo = User::all();

        return view('components.admin.medicines.edit', [
            'medicine' => $medicine,
            'medicinesInfo' => $medicinesInfo,
            'diseasesInfo' => $diseasesInfo,
            'symptomsInfo' => $symptomsInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicineRequest $request, Medicine $medicine)
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'composition' => 'required',
            'dose' => 'required',
        ];

        $validatedData = $request->validate($rules);

        $medicine->update($validatedData);
        return redirect('/medicines')->with('success', 'Medicine was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicine $medicine)
    {
        Medicine::destroy($medicine['id']);
        return redirect('/medicines')->with('success', 'Medicine was deleted successfully');
    }
}
