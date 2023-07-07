<?php

use App\Http\Controllers\Api\FetchDataController;
use Illuminate\Support\Facades\Route;

Route::get('fetchDatabase', [FetchDataController::class, 'fetchDataBase']);
Route::get('/fetchData', [FetchDataController::class, 'fetchData']);
Route::get('/getData/{id}', [FetchDataController::class, 'getData']);
