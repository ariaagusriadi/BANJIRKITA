<?php

use App\Http\Controllers\admin\sensor\WaterLevelController;
use Illuminate\Support\Facades\Route;

Route::get('waterLevel', [WaterLevelController::class, 'index']);
