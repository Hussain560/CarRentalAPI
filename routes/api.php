<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Public routes
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    
    // Cars routes
    Route::get('cars', [CarController::class, 'index']);
    Route::get('cars/{id}', [CarController::class, 'show']);
    Route::post('cars', [CarController::class, 'store']);
    Route::put('cars/{id}', [CarController::class, 'update']);
    Route::delete('cars/{id}', [CarController::class, 'destroy']);
});
