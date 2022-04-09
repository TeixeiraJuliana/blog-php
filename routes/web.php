<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\Post;
use Illuminate\Http\Controllers\Comment;


Route::get('/', [App\Http\Controllers\PostController::class, 'index']);
Route::post('/posts', [App\Http\Controllers\PostController::class, 'store']);
Route::get('post/create', [App\Http\Controllers\PostController::class, 'create'])->middleware('auth');
Route::get('posts/{id}', [App\Http\Controllers\PostController::class, 'show']);
Route::get('posts/edit/{id}', [App\Http\Controllers\PostController::class, 'edit']);
Route::put('posts/update/{id}', [App\Http\Controllers\PostController::class, 'update']);
Route::delete('posts/{id}', [App\Http\Controllers\PostController::class, 'delete']);


Route::post('/comments', [App\Http\Controllers\CommentController::class, 'store']);
Route::delete('comments/{id}', [App\Http\Controllers\CommentController::class, 'delete']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('dashboard');
});
