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
            'category' => 'required|string|max:255',
            'price_per_day' => 'required|numeric|min:0',
            'is_available' => 'boolean'
        ]);

        $car = Car::create($validated);

        return response()->json([
            'message' => 'Car created successfully',
            'car' => $car
        ], 201);
    }

    public function update(Request $request, string $id)
    {
        $car = Car::findOrFail($id);
        
        $validated = $request->validate([
            'brand' => 'sometimes|required|string|max:255',
            'model' => 'sometimes|required|string|max:255',
            'category' => 'sometimes|required|string|max:255',
            'price_per_day' => 'sometimes|required|numeric|min:0',
            'is_available' => 'sometimes|boolean'
        ]);

        $car->update($validated);

        return response()->json([
            'message' => 'Car updated successfully',
            'car' => $car
        ]);
    }

    public function destroy(string $id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return response()->json([
            'message' => 'Car deleted successfully'
        ]);
    }
}
