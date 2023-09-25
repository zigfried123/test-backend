<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\DefaultController::class, 'index']);

Route::controller(UserController::class)->group(function(){
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/store', [UserController::class, 'store']);
});

