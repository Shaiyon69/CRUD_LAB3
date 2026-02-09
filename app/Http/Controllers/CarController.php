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
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('brand', 'like', "%{$search}%")
                  ->orWhere('model', 'like', "%{$search}%");
            });
        }

        $cars = $query->latest()->paginate(10);

        if ($request->wantsJson() || $request->is('api/*')) {
            return response()->json($cars);
        }

        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

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

        if ($request->wantsJson() || $request->is('api/*')) {
            return response()->json($car, 201);
        }

        return redirect()->route('cars.index');
    }

    public function show(Request $request, $id)
    {
        $car = Car::findOrFail($id);

        if ($request->wantsJson() || $request->is('api/*')) {
            return response()->json($car);
        }

        return view('cars.details', compact('car'));
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year'  => 'required|integer|min:1900|max:2100',
            'color' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        $car = Car::findOrFail($id);
        $car->update($validated);

        if ($request->wantsJson() || $request->is('api/*')) {
            return response()->json($car);
        }

        return redirect()->route('cars.index');
    }

    public function destroy(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        if ($request->wantsJson() || $request->is('api/*')) {
            return response()->noContent();
        }

        return redirect()->route('cars.index');
    }
}