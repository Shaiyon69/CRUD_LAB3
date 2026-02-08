<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    //READ
    public function index()
    {
        $cars = Car::all();
        return response()->json($cars);
    }

    //DISPLAY
    public function show($id)
    {
        $car = Car::findOrFail($id);
        return response()->json($car);
    }

    //DELETE
    public function destroy($id)
    {
        $car = Car::findOrFail($id);

        $car->delete();
        return response()->json(['message' => 'Car deleted successfully']);
    }

    //STORE
    public function store(Request $request)
    {
        $validated = $request->validate([
        'brand' => 'required|string|max:255',
        'model' => 'required|string|max:255',
        'year'  => 'required|integer|min:1900|max:2100',
        'color' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
    ]);

    $car = Car::create($validated);

    return response()->json([
        'message' => 'Car added successfully',
        'car' => $car
    ], 201);

    }

    //UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
            'brand' => 'sometimes|string|max:255',
            'model' => 'sometimes|string|max:255',
            'year' => 'sometimes|integer|min:1900|max:2100',
            'color' => 'sometimes|string|max:255',
            'price' => 'sometimes|numeric|min:0',
        ]);

        $car = Car::findOrFail($id);
        $car->update($request->all());
        
        return response()->json([
            'message' => 'Car updated successfully!',
            'car' => $car
        ]);
    }
}