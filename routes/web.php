<?php

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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('signin', [SignInController::class, 'index'])->name('signin');
Route::post('signin', [SignInController::class, 'index']);

Route::get('signup', [SignUpController::class, 'index'])->name('signup');