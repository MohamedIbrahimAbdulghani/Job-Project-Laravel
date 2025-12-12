<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TagController;

Route::get('/', IndexController::class);
Route::get('/abouts', AboutController::class);
Route::get('/contacts', ContactController::class);
Route::get('/jobs', [JobController::class, 'index']);


/************************************************    Routes For Blog  ********************************** */
Route::resource('/posts', PostController::class);

/************************************************    Routes For Comment  ********************************** */
Route::resource('/comments', CommentController::class);

/************************************************    Routes For Tag  ********************************** */
Route::resource('/tags', TagController::class);
