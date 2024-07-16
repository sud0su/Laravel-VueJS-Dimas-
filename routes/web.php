<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Dashboard/Index');
});

//route index register
Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'index']);
//route store register
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'store']);

//route index login
Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'index']);
//route store login
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'store']);

//route khusus untuk yang sudah login
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'destroy']);
    Route::get('/dashboard', \App\Http\Controllers\DashboardController::class);
    Route::resource('samples', \App\Http\Controllers\SampleController::class);
});
