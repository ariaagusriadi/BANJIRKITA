<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\Api\FetchDataController;
use App\Http\Controllers\admin\MonitoringBanjirController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', fn () => redirect('/login'));

Route::get('/login', [LoginController::class, 'loginView'])->name('login');
Route::post('/login', [LoginController::class, 'loginProcess']);
Route::get('/logout', [LoginController::class, 'logOut']);

include "_/user/home.php";
Route::get('monitoring-banjir/total', [MonitoringBanjirController::class, 'monitor']);
Route::get('/monitoring/fetchData', [MonitoringBanjirController::class, 'monitorFetchData']);


Route::middleware('auth')->prefix('admin')->group(function () {
    include "_/admin/dashboard.php";
    include "_/admin/sensor/humadity.php";
    include "_/admin/sensor/temperature.php";
    include "_/admin/sensor/waterLevel.php";
    include "_/admin/locationSensor.php";
    include "_/admin/monitoringBanjir.php";
    include "_/admin/notificationCenter.php";
    include "_/admin/indicatorLimit.php";
    include "_/admin/FetchDataController.php";
    include "_/admin/user.php";
});

// Route::get('/', function () {
//     return view('welcome');
// });
