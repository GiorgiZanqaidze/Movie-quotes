<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminQuoteController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [QuoteController::class, 'index'])->name('home');
Route::get('movies/{movie}', [AdminMovieController::class, 'show']);

Route::get('login', [AuthController::class, 'create'])->middleware('guest');
Route::post('login', [AuthController::class, 'login'])->middleware('guest');
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('dashboard', [AdminDashboardController::class, 'show'])->middleware('auth');
Route::get('dashboard/movies', [AdminDashboardController::class, 'movies'])->middleware('auth');
Route::get('dashboard/quotes', [AdminDashboardController::class, 'quotes'])->middleware('auth');

Route::get('movies/movie/create', [AdminMovieController::class, 'index'])->middleware('auth');
Route::post('movies/movie/create', [AdminMovieController::class, 'create'])->middleware('auth');
Route::delete('movies/movie/{movie}/delete', [AdminMovieController::class, 'destroy'])->middleware('auth');
Route::get('movies/movie/{movie}/edit', [AdminMovieController::class, 'edit'])->middleware('auth');
Route::patch('movies/movie/{movie}/edit', [AdminMovieController::class, 'update'])->middleware('auth');

Route::get('quotes/quote/create', [AdminQuoteController::class, 'create'])->middleware('auth');
Route::post('quotes/quote/create', [AdminQuoteController::class, 'store'])->middleware('auth');
Route::delete('quotes/quote/{quote}/delete', [AdminQuoteController::class, 'destroy'])->middleware('auth');
Route::get('quotes/quote/{quote}/edit', [AdminQuoteController::class, 'edit'])->middleware('auth');
Route::patch('quotes/quote/{quote}/edit', [AdminQuoteController::class, 'update'])->middleware('auth');

// languages controller
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
