<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    // --- READ (Index + Search) ---
    public function index(Request $request)
    {
        $query = Car::query();

        // 1. Fixed: Added Search Logic
        if ($request->filled('search')) {
            $query->where('brand', 'like', "%{$request->search}%")
                  ->orWhere('model', 'like', "%{$request->search}%");
        }

        $cars = $query->latest()->paginate(5); // Pagination is better than all()

        // 2. Fixed: Returns View instead of JSON
        return view('cars.index', compact('cars'));
    }

    // --- CREATE (Show Form) ---
    // 3. Fixed: Added missing method
    public function create()
    {
        return view('cars.create');
    }

    // --- STORE (Save Data) ---
    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year'  => 'required|integer|min:1900|max:2100',
            'color' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        Car::create($validated);

        // 4. Fixed: Redirects to index instead of showing JSON
        return redirect()->route('cars.index')->with('success', 'Car added successfully');
    }

    // --- DISPLAY (Show Details) ---
    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.details', compact('car')); // Points to details.blade.php
    }

    // --- EDIT (Show Form) ---
    // 5. Fixed: Added missing method
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.edit', compact('car'));
    }

    // --- UPDATE (Save Changes) ---
    public function update(Request $request, $id)
    {
        $request->validate([
            'brand' => 'required|string|max:255', // Changed 'sometimes' to 'required' for safety
            'model' => 'required|string|max:255',
            'year'  => 'required|integer|min:1900|max:2100',
            'color' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        $car = Car::findOrFail($id);
        $car->update($request->all());

        return redirect()->route('cars.index')->with('success', 'Car updated successfully!');
    }

    // --- DELETE ---
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Car deleted successfully');
    }
}
