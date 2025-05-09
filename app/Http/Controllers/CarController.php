<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'cars' => Car::all()
        ]);
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return response()->json([
            'status' => 'success',
            'car' => $car
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'category' => 'required|string|max:255',
            'price_per_day' => 'required|numeric|min:0',
            'is_available' => 'boolean'
        ]);

        $car = Car::create($validated);

        return response()->json([
            'status' => 'success',
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
            'year' => 'sometimes|required|integer|min:1900|max:' . (date('Y') + 1),
            'category' => 'sometimes|required|string|max:255',
            'price_per_day' => 'sometimes|required|numeric|min:0',
            'is_available' => 'sometimes|boolean'
        ]);

        $car->update($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Car updated successfully',
            'car' => $car
        ]);
    }

    public function destroy(string $id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Car deleted successfully'
        ]);
    }
}
