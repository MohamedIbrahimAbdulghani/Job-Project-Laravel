<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\TagController;

// Route::apiResource('posts', PostController::class);


Route::prefix('v1')->name('api.')->group(function() {
    Route::apiResource('posts', PostController::class);
    Route::apiResource('comments', CommentController::class);
    Route::apiResource('tags', TagController::class);
});
