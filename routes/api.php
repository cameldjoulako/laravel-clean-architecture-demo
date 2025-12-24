<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Intervention\TaskController;



Route::prefix('v1')
    ->middleware(['auth:sanctum', 'throttle:api'])
    ->group(function () {
        Route::get('/tasks',  [TaskController::class, 'index']);
        Route::post('/tasks', [TaskController::class, 'store']);
    });

//Public endpoints
Route::get('/health', fn() => response()->json(['ok' => true]));
