<?php

use App\Http\Controllers\admin\sensor\TemperatureController;
use Illuminate\Support\Facades\Route;

Route::get('temperature', [TemperatureController::class, 'index']);
Route::get('fetchData', [TemperatureController::class, 'fetchData']);
