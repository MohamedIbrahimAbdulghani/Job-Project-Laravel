<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [IndexController::class, 'about']);
Route::get('/contact', [IndexController::class, 'contact']);

Route::get('/jobs', [JobController::class, 'index']);


/************************************************    Routes For Blog  ********************************** */
Route::get('/post', [PostController::class, 'index']);
// Route::post('/post', [PostController::class, 'create']);
// Route::delete('/post/delete/{id}', [PostController::class, 'delete']);
Route::get('/post/{id}', [PostController::class, 'show'])->name('post_by_id');



/************************************************    Routes For Comment  ********************************** */
Route::get('/comment', [CommentController::class, 'index'])->name('comment');
// Route::post('/comment', [CommentController::class, 'create']);
// Route::delete('/comment/delete/{id}', [CommentController::class, 'delete']);


/************************************************    Routes For Tag  ********************************** */
Route::get('/tag', [TagController::class, 'index']);
// Route::post('/tag', [TagController::class, 'create']);
Route::get('/tag/testing', [TagController::class, 'testManyToMany']);