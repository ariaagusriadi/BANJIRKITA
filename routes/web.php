<?php

use App\Http\Controllers\auth\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->prefix('admin')->group(function () {
    include "_/admin/dashboard.php";
    include "_/admin/sensor/humadity.php";
    include "_/admin/sensor/temperature.php";
    include "_/admin/sensor/waterLevel.php";
    include "_/admin/locationSensor.php";
    include "_/admin/monitoringBanjir.php";
    include "_/admin/notificationCenter.php";
    include "_/admin/indicatorLimit.php";
});

// Route::get('/', function () {
//     return view('welcome');
// });
