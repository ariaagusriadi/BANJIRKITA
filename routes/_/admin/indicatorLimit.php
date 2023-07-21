<?php

use App\Http\Controllers\admin\IndicatorLimitController;
use Illuminate\Support\Facades\Route;

Route::get('indicator-limit', [IndicatorLimitController::class, 'index']);
Route::get('indicator-limit/create/{location}', [IndicatorLimitController::class, 'create']);
Route::post('indicator-limit', [IndicatorLimitController::class, 'store']);
Route::get('indicator-limit/{location}', [IndicatorLimitController::class, 'show']);
Route::get('indicator-limit/edit/{location}', [IndicatorLimitController::class, 'edit']);
Route::put('indicator-limit/{indicatorLimit}', [IndicatorLimitController::class, 'update']);
