<?php

use App\Http\Controllers\admin\LocationSensorController;
use Illuminate\Support\Facades\Route;

Route::get('locationSensor', [LocationSensorController::class, 'index']);
Route::get('locationSensor/create', [LocationSensorController::class, 'create']);
Route::post('locationSensor', [LocationSensorController::class, 'store']);
Route::get('locationSensor/{locationSensor}', [LocationSensorController::class, 'show']);
Route::get('locationSensor/{locationSensor}/edit', [LocationSensorController::class, 'edit']);
Route::put('locationSensor/{locationSensor}', [LocationSensorController::class, 'update']);
Route::delete('locationSensor/{locationSensor}', [LocationSensorController::class, 'destroy']);
