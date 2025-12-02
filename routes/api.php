<?php

use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\TagController;
use Illuminate\Support\Facades\Route;

// REST API (Restful API) => HTTP Standard
Route::apiResource('post', PostController::class);
Route::apiResource('comment', CommentController::class);
Route::post('/post/{post}/comments', [CommentController::class, 'store']);
Route::apiResource('tag', TagController::class);
