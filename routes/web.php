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


// Public Routes
Route::get('/', IndexController::class);
// Route::get('/abouts', AboutController::class);
Route::get('/contacts', ContactController::class);
Route::get('/jobs', [JobController::class, 'index']);


/************************************************    Routes For Authentication  ********************************** */
Route::get('signup', [AuthController::class, 'ShowSignUp'])->name('signup');
Route::post('signup', [AuthController::class, 'SignUp']);
Route::get('signin', [AuthController::class, 'ShowSignIn'])->name('login');
Route::post('signin', [AuthController::class, 'SignIn']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


// ## Protected Routes
Route::middleware('auth')->group(function() {
    /************************************************    Routes For Blog  ********************************** */
    Route::resource('/posts', PostController::class);

    /************************************************    Routes For Comment  ********************************** */
    Route::resource('/comments', CommentController::class);

    /************************************************    Routes For Tag  ********************************** */
    Route::resource('/tags', TagController::class);
});


Route::middleware('onlyme')->group(function() {
    Route::get('/abouts', AboutController::class);
});
