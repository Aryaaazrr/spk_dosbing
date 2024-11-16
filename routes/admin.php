<?php

use App\Http\Controllers\Admin\Auth\AuthController;
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

Route::prefix('admin-panel')->name('admin.')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
        Route::resource('sign-in', AuthController::class)
            ->only('index', 'store', 'destroy')
            ->names([
                'index' => 'auth.signIn',
                'store' => 'auth.signIn.proces',
                'destroy' => 'auth.signOut',
            ]);
    });
});