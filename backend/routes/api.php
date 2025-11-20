<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\PageController;
use App\Http\Controllers\API\MediaController;

// Token-based API login
Route::post('/login', [AuthController::class, 'login']); // API login (returns token)

// Routes protected with Sanctum token authentication
Route::middleware('auth:sanctum')->group(function () {

    // Authenticated user info
    Route::get('/user', [AuthController::class, 'me']); // returns logged-in user
    Route::post('/logout', [AuthController::class, 'logout']); // logout and revoke token

    // Dashboard stats
    Route::get('/dashboard-stats', [DashboardController::class, 'stats']);

    // Posts CRUD
    Route::apiResource('posts', PostController::class);
    Route::patch('posts/{id}/publish', [PostController::class, 'publish']);

    // Pages CRUD
    Route::apiResource('pages', PageController::class);

    // Media Library
    Route::get('media', [MediaController::class, 'index']);
    Route::post('media/upload', [MediaController::class, 'upload']);
    Route::delete('media', [MediaController::class, 'destroy']);
});
