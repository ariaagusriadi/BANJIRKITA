<?php

use App\Http\Controllers\admin\NotificationCenterController;
use Illuminate\Support\Facades\Route;

Route::get('notification-center', [NotificationCenterController::class, 'index']);
