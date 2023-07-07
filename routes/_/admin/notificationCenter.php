<?php

use App\Http\Controllers\admin\NotificationCenterController;
use Illuminate\Support\Facades\Route;

Route::get('notification-center', [NotificationCenterController::class, 'index']);
Route::get('notification-center/create', [NotificationCenterController::class, 'create']);
Route::post('notification-center', [NotificationCenterController::class, 'store']);
Route::put('notification-center/unPublished/{notification}', [NotificationCenterController::class, 'update']);
