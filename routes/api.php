<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\PostController;
use App\Http\Controllers\Api\v1\CommentController;
use App\Http\Controllers\Api\v1\TagController;
use App\Http\Controllers\Api\v1\AuthController;

// Route::apiResource('posts', PostController::class);


Route::prefix('v1')->name('api.')->group(function() {
    Route::apiResource('posts', PostController::class);
    Route::apiResource('comments', CommentController::class);
    Route::apiResource('tags', TagController::class);

    // Routes to make authentication
    /**
     * POST /v1/auth/signin
     * POST /v1/auth/refresh
     * GET /v1/auth/me
     * POST /v1/auth/logout
     */
    Route::prefix('auth')->group(function() {
        Route::post('signin', [AuthController::class, 'signIn']);

        // only if i am authenticated with JWT ( Authorization Header )
    });
});



