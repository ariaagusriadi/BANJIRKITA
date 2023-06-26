<?php

use App\Http\Controllers\admin\IndicatorLimitController;
use Illuminate\Support\Facades\Route;

Route::get('indicator-limit', [IndicatorLimitController::class, 'index']);
Route::get('indicator-limit/edit/{location}', [IndicatorLimitController::class, 'edit']);
Route::post('indicator-limit', [IndicatorLimitController::class, 'store']);
Route::get('indicator-limit/{location}', [IndicatorLimitController::class, 'show']);
