<?php

namespace App\Http\Controllers\Api;

use App\Models\CylinderCover;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCylinderCoverRequest;
use App\Http\Requests\UpdateCylinderCoverRequest;
use App\Http\Resources\CylinderCollection;
use App\Http\Resources\CylinderResource;

class CylinderCoverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new CylinderCollection(CylinderCover::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCylinderCoverRequest $request)
    {
        return new CylinderResource(CylinderCover::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(CylinderCover $cylinder)
    {
        // return $cylinder;
        return new CylinderResource($cylinder);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCylinderCoverRequest $request, CylinderCover $cylinderCover)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CylinderCover $cylinderCover)
    {
        //
    }
}
