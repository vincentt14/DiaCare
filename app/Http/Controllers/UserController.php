<?php

namespace App\Http\Controllers;

use App\Models\DiagnoseResult;
use App\Models\Disease;
use App\Models\Medicine;
use App\Models\Symptom;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diagnoseResults = DiagnoseResult::all();
        $users = User::orderBy('name');
        $usersInfo = User::all();
        $symptomsInfo = Symptom::all();
        $diseasesInfo = Disease::all();
        $medicinesInfo = Medicine::all();

        if (request('search')){
            $users->where('name', 'like', '%' . request('search') . '%');
        }

        return view('components.admin.users.view', [
            'diagnoseResults' => $diagnoseResults,
            'users' => $users->paginate(15)->withQueryString(),
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
