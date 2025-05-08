<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return response()->json([
            'cars' => Car::all()
        ]);
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return response()->json([
            'car' => $car
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'price_per_day' => 'required|numeric|min:0',
            'is_available' => 'boolean'
        ]);

        $car = Car::create($validated);

        return response()->json([
            'message' => 'Car created successfully',
            'car' => $car
        ], 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
