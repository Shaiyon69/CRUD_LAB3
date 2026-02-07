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
        // return view('cars.index', compact('cars'));

    }

    //DISPLAY
    public function show($id)
    {

        $car = Car::findOrFail($id);
        return response()->json($car);
        // return view('cars.show', compact('car'));

    }

    //ADD
    public function create()
    {
        //
    }

    //DELETE
    public function destroy($id)
    {
        $car = Car::findOrFail($id);

        if (!$car) {
            return response()->json(['message' => 'Car not found'], 404);
        }

        $car->delete();
        return response()->json(['message' => 'Car deleted successfully']);
        // return redirect()->route('cars.index')
        //                  ->with('success', 'Car deleted successfully!');
        //
        //

    }

    //STORE
    public function store(Request $request)
    {
        //
    }

    //UPDATE
    public function update(Request $request, $id)
    {
        //
    }

    //EDIT
    public function edit($id)
    {

    }
}
