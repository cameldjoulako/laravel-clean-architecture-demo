<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Intervention\TaskController;

Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store']);
