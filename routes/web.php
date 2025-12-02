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
Route::get('/about', AboutController::class);
Route::get('/contact', ContactController::class);
Route::get('/jobs', [JobController::class, 'index']);


/************************************************    Routes For Blog  ********************************** */
Route::resource('/post', PostController::class);
Route::get('/post/delete/{id}', [PostController::class, 'destroy'])->name('post.delete');

/************************************************    Routes For Comment  ********************************** */
Route::resource('/comment', CommentController::class);
Route::get('/comment/delete/{id}', [CommentController::class, 'destroy'])->name('comment.delete');

/************************************************    Routes For Tag  ********************************** */
Route::resource('/tag', TagController::class);
Route::get('/tag/delete/{id}', [TagController::class, 'destroy'])->name('tag.delete');
