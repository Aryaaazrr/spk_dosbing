<?php

use App\Http\Controllers\Api\Auth\SignInController;
use App\Http\Controllers\Api\Auth\SignOutController;
use App\Http\Controllers\Api\Auth\SignUpController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('sign-up', [SignUpController::class, 'signup'])->name('signup');
    Route::post('sign-in', [SignInController::class, 'signin'])->name('signin');
    Route::post('signout', [SignOutController::class, 'signout'])->middleware('auth:api')->name('signout');
    Route::post('refresh', [SignInController::class, 'refresh'])->middleware('auth:api')->name('refresh');
    Route::post('/me', [SignInController::class, 'me'])->middleware('auth:api')->name('me');

    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });
});