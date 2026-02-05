<?php

use Illuminate\Support\Facades\Route;

Route::resource('cars', App\Http\Controllers\CarController::class);

// Route::get('/', function () {
//     return view('welcome');

Route::get('/', function () {
    return redirect()->route('cars.index');
});
