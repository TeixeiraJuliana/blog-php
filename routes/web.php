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


