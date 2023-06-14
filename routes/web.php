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

Route::middleware('auth')->prefix('admin')->group(function () {
    include "_/admin/dashboard.php";
    include "_/sensor/humadity.php";
    include "_/sensor/temperature.php";
    include "_/sensor/waterLevel.php";
});

// Route::get('/', function () {
//     return view('welcome');
// });
