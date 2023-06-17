<?php

use App\Http\Controllers\admin\MonitoringBanjirController;
use Illuminate\Support\Facades\Route;

Route::get('monitoring-banjir', [MonitoringBanjirController::class, 'index']);
Route::get('monitoring-banjir/fetchData', [MonitoringBanjirController::class, 'fetchData']);
Route::get('monitoring-banjir/{location}', [MonitoringBanjirController::class, 'show']);
