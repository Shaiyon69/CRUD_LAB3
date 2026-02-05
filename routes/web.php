<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::resource('cars', App\Http\Controllers\CarController::class);

// Route::get('/', function () {
//     return view('welcome');

Route::get('/', function () {
    return redirect()->route('cars.index');
});

Route::get('/cars', [CarController::class, 'index']);     
Route::get('/cars/{id}', [CarController::class, 'show']);
