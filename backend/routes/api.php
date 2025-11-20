<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\PageController;
use App\Http\Controllers\API\MediaController;

Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('me', [AuthController::class, 'me']);

    Route::apiResource('posts', PostController::class);
    Route::patch('posts/{id}/publish', [PostController::class, 'publish']);

    Route::apiResource('pages', PageController::class);
    Route::post('media/upload', [MediaController::class, 'upload']);
});
