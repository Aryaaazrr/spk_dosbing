<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Website\Auth\AuthController;
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

Route::middleware('guest')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');

    Route::prefix('auth')->name('auth.')->group(function () {
        Route::get('sign-in', [AuthController::class, 'index'])->name('index');
        Route::get('sign-up', [AuthController::class, 'create'])->name('create');
        Route::get('forgot', [AuthController::class, 'edit'])->name('edit');
    });;
});

Route::middleware('auth')->name('user.')->group(function () {});
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

require __DIR__ . '/admin.php';
