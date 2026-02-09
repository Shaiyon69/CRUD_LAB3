<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $query = Car::query();

        if ($request->filled('search')) {
            $query->where('brand', 'like', "%{$request->search}%")
                  ->orWhere('model', 'like', "%{$request->search}%");
        }

        $cars = $query->latest()->paginate(5);


        if ($request->is('api/*') || $request->wantsJson()) {
            return response()->json($cars);
        }

        return view('cars.index', compact('cars'));
    }


    public function show($id)
    {
        $car = Car::findOrFail($id);


        return view('cars.details', compact('car'));
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);

        return view('cars.edit', compact('car'));
    }

    // --- CREATE ---
    public function create()
    {
        return view('cars.create');
    }

    // --- STORE ---
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year'  => 'required|integer|min:1900|max:2100',
            'color' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        Car::create($request->all());

        return redirect()->route('cars.index')->with('success', 'Car added successfully');
    }

    // --- UPDATE ---
    public function update(Request $request, $id)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year'  => 'required|integer|min:1900|max:2100',
            'color' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        $car = Car::findOrFail($id);
        $car->update($request->all());

        return redirect()->route('cars.index')->with('success', 'Car updated successfully');
    }

    // --- DESTROY ---
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Car deleted successfully');
    }
}
