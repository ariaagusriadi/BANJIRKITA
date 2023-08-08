<?php

use App\Http\Controllers\admin\NotificationCenterController;
use Illuminate\Support\Facades\Route;

Route::get('notification-center', [NotificationCenterController::class, 'index']);
Route::get('notification-center/create', [NotificationCenterController::class, 'create']);
Route::post('notification-center', [NotificationCenterController::class, 'store']);
Route::put('notification-center/unPublished/{notification}', [NotificationCenterController::class, 'update']);
Route::delete('notification-center/delete/{notification_log}', [NotificationCenterController::class, 'destroy']);


Route::get('notification-center/create-telegram', [NotificationCenterController::class, 'createTelegram']);
