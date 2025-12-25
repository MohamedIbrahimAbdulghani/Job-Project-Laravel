<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\AuthController;

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

/************************************************    Routes For Authentication  ********************************** */
Route::get('signup', [AuthController::class, 'ShowSignUp']);
Route::post('signup', [AuthController::class, 'SignUp']);
Route::get('signin', [AuthController::class, 'ShowSignIn']);
Route::post('signin', [AuthController::class, 'SignIn']);
Route::post('logout', [AuthController::class, 'logout']);
