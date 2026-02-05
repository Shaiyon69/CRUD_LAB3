<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //READ
    public function index()
    {
        //
        return "Index Page para di lang muna mag error yung routing";

       
       // $cars = Car::all();
    //return response()->json($cars);  or  // return view('cars.index', compact('cars'));
       
    }

    public function show($id)
    {
        //
        return "Show Page para di lang muna mag error yung routing";

        //$car = Car::findOrFail($id);

        //return response()->json($car); or  // return view('cars.show', compact('car'));

    }

    //ADD
    public function create()
    {
        //
    }

    //DELETE
    public function destroy($id)
    {
        {
        // // $car->delete();

        // return redirect()->route('cars.index')
        //                  ->with('success', 'Car deleted successfully!');
    }
    }

    //STORE
    public function store(Request $request)
    {
        //
    }

    //EDIT
    public function edit($id)
    {
        //
    }

    //UPDATE
    public function update(Request $request, $id)
    {
        //
    }
}
