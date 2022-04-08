<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------


|Route::group(['middleware' => 'web'], function () {
    Route::get('/',  [App\Http\Controllers\PostController::class, 'index']);
    Auth::routes();
    Route::get('/Post', [App\Http\Controllers\PostController::class, 'index'])->name('post');
});

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\PostController::class, 'index']);
Route::post('/posts', [App\Http\Controllers\PostController::class, 'store']);
Route::get('post/create', [App\Http\Controllers\PostController::class, 'create']);
Route::get('posts/{id}', [App\Http\Controllers\PostController::class, 'show']);





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
