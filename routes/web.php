<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
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

// Route::middleware('guest')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');

    Route::get('signin', [SignInController::class, 'index'])->name('signin');
    Route::post('signin', [SignInController::class, 'show']);

    Route::get('signup', [SignUpController::class, 'index'])->name('signup');
    Route::post('signup', [SignUpController::class, 'index']);

    Route::get('forgot', [ForgotController::class, 'index'])->name('forgot');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });