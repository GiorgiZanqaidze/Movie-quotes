<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminQuoteController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;

Route::get('/', [QuoteController::class, 'index']);
Route::get('/movies/{movie:slug}', [MovieController::class, 'show']);

Route::get('login', [UserController::class, 'create'])->middleware('guest');
Route::post('login', [UserController::class, 'store'])->middleware('guest');
Route::post('logout', [UserController::class, 'destroy'])->middleware('auth');

Route::get('dashboard/movies', [AdminDashboardController::class, 'show'])->middleware('auth');
Route::delete('movies/movie/{movie:slug}/delete', [AdminDashboardController::class, 'destroy'])->middleware('auth');
Route::get('movies/movie/{movie:slug}/edit', [AdminDashboardController::class, 'edit'])->middleware('auth');
Route::patch('movies/movie/{movie:slug}/edit', [AdminDashboardController::class, 'update'])->middleware('auth');

Route::get('movies/movie/create', [AdminMovieController::class, 'index'])->middleware('auth');
Route::post('movies/movie/create', [AdminMovieController::class, 'create'])->middleware('auth');

Route::get('quotes/quote/create', [AdminQuoteController::class, 'create'])->middleware('auth');
Route::post('quotes/quote/create', [AdminQuoteController::class, 'store'])->middleware('auth');
