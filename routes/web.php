<?php

use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;

Route::get('/', [QuoteController::class, 'index']);
Route::get('/movies/{movie:slug}', [MovieController::class, 'show']);

Route::get('login', [UserController::class, 'create']);
Route::post('login', [UserController::class, 'store']);
Route::post('logout', [UserController::class, 'destroy']);
