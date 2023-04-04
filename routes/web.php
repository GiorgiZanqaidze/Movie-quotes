<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;

Route::get('/', [QuoteController::class, 'index']);
Route::get('/movies/{movie:slug}', [MovieController::class, 'show']);

Route::get('login', [UserController::class, 'create'])->middleware('guest');
Route::post('login', [UserController::class, 'store'])->middleware('guest');
Route::post('logout', [UserController::class, 'destroy'])->middleware('auth');

Route::get('movies/movie/create', [AdminMovieController::class, 'index'])->middleware('auth');
Route::post('movies/movie/create', [AdminMovieController::class, 'create'])->middleware('auth');
Route::get('dashboard', [AdminDashboardController::class, 'show'])->middleware('auth');
