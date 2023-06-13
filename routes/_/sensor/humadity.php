<?php

use App\Http\Controllers\admin\sensor\HumadityController;
use Illuminate\Support\Facades\Route;

Route::get('humadity', [HumadityController::class, 'index']);
Route::get('fetchData', [HumadityController::class, 'fetchData']);
