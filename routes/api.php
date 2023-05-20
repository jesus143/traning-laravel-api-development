<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->prefix('/')->group(function(){
    Route::post('users/auth-retrieve',  [\App\Http\Controllers\UserController::class, 'authRetrieve']);

});


Route::resource('users', \App\Http\Controllers\UserController::class)->only([
    'index',
    'store',
    'update',
    'destroy',
    'show',

]);

//Route::prefix('/')->group(function(){
//    Route::post('users/auth-retrieve',  [\App\Http\Controllers\UserController::class, 'authRetrieve']);
//})->middleware('auth:sanctum');
