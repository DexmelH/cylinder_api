<?php

use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\CylinderCoverController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'App\Http\Controllers\Api'], function() {
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('locations', LocationController::class);
    Route::apiResource('cylinders', CylinderCoverController::class);
});