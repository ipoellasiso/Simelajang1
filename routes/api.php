<?php

use App\Http\Controllers\Api\OpdController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('opd', [OpdController::class, 'index']);
// Route::get('opd/{id}', [OpdController::class, 'show']);
// Route::post('opd', [OpdController::class, 'store']);
// Route::put('opd/{id}', [OpdController::class, 'update']);
// Route::delete('opd/{id}', [OpdController::class, 'destroy']);

Route::apiResource('opd', OpdController::class);

