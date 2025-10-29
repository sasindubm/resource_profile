<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\BasicInfoController;
use App\Http\Controllers\GovFigureController;
use App\Http\Controllers\AbondenedBuildingController;

//Register API routes for fetching location and basic info names
Route::get('/api/ds-by-district/{d_code}', [LocationController::class, 'getDS']);
Route::get('/api/gnd-by-ds/{ds_id}', [LocationController::class, 'getGND']);

//Dashboard info routes
Route::get('/api/gnd-by-uid/{gnd_uid}', [BasicInfoController::class, 'getGNDName']);
Route::get('/api/ds-by-gnd/{gnd_uid}', [BasicInfoController::class, 'getDSNameByGND']);
Route::get('/api/district-by-gnd/{gnd_uid}', [BasicInfoController::class, 'getDistrictNameByGND']);
Route::get('/api/gnd-number-by-uid/{gnd_uid}', [BasicInfoController::class, 'getGNDNumber']);

//Government Figures routes
Route::post('/api/insert-gf/{gnd_uid}', [GovFigureController::class, 'insertGovernmentFigure']);
Route::get('/api/get-gf/{gnd_uid}', [GovFigureController::class, 'getAllGovernmentFigure']);

//Abondened Government Buildings routes
Route::get('/api/get-agb/{gnd_uid}', [AbondenedBuildingController::class, 'getAbondenedBuidings']);
Route::post('/api/insert-agb/{gnd_uid}', [AbondenedBuildingController::class, 'insertAbondenedBuilding']);
