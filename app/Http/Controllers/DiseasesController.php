<?php

namespace App\Http\Controllers;

use App\Models\Diseases;
use App\Http\Requests\StoreDiseasesRequest;
use App\Http\Requests\UpdateDiseasesRequest;

class DiseasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diseases = Diseases::latest();

        return view('components.admin.diseases.view', [
            'diseases' => $diseases->get()
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
    public function store(StoreDiseasesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Diseases $diseases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diseases $diseases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiseasesRequest $request, Diseases $diseases)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diseases $diseases)
    {
        //
    }
}
