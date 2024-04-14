<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request)  {
    return $request->user();
});

// Route::group(['prefix' => '/api'], function () use ($router) {
//     $router->post('/posts', [App\Http\Controllers\PostController::class, 'store']);
// });

Route::group([], function () use ($router) {
    $router->post('/posts', [App\Http\Controllers\PostController::class, 'store']);
    $router->get('/posts', [App\Http\Controllers\PostController::class, 'getAllPosts']);
});