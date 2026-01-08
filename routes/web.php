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
    // Authorization Rules
    // 1- (admin)
    Route::middleware('role:admin')->group(function() {

    });
    // 2- (user, admin, editor)
    Route::middleware('role:admin,editor')->group(function() {
        Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
        Route::post('posts/store', [PostController::class, 'store'])->name('posts.store');
        Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
        Route::PUT('posts/{id}', [PostController::class, 'update'])->name('posts.update');
        Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
    });
    // 3- (user, admin, editor)
    Route::middleware('role:user,admin,editor')->group(function() {
        Route::get('posts', [PostController::class, 'index'])->name('posts');
        Route::get('posts/{id}/show', [PostController::class, 'show'])->name('posts.show');
    });

    /************************************************    Routes For Comment  ********************************** */
    Route::resource('/comments', CommentController::class);

    /************************************************    Routes For Tag  ********************************** */
    Route::resource('/tags', TagController::class);
});


Route::middleware('onlyme')->group(function() {
    Route::get('/abouts', AboutController::class);
});
