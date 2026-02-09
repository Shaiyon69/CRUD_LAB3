<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

// 1. Redirect the homepage (http://127.0.0.1:8000) to the cars list
Route::get('/', function () {
    return redirect()->route('cars.index');
});

// 2. This ONE line creates all the routes you need (index, create, store, edit, etc.)
Route::resource('cars', CarController::class);
