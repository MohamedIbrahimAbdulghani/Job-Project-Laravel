<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Support\Facades\Route;

// REST API (Restful API) => HTTP Standard
Route::apiResource('post', PostController::class);