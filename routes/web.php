<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\QuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::controller(DashboardController::class)->group(function () {
	Route::get('login', [AuthController::class, 'create'])->middleware('guest');
	Route::post('login', [AuthController::class, 'login'])->middleware('guest');
	Route::post('logout', [AuthController::class, 'logout'])->middleware('auth');
});

Route::controller(DashboardController::class)->group(function () {
	Route::get('dashboard', [DashboardController::class, 'show'])->middleware('auth');
	Route::get('dashboard/movies', [DashboardController::class, 'movies'])->middleware('auth');
	Route::get('dashboard/quotes', [DashboardController::class, 'quotes'])->middleware('auth');
});
Route::controller(DashboardController::class)->group(function () {
	Route::get('movies/{movie}', [MovieController::class, 'show']);
	Route::get('movies/movie/create', [MovieController::class, 'index'])->middleware('auth');
	Route::post('movies/movie/create', [MovieController::class, 'create'])->middleware('auth');
	Route::delete('movies/movie/{movie}/delete', [MovieController::class, 'destroy'])->middleware('auth');
	Route::get('movies/movie/{movie}/edit', [MovieController::class, 'edit'])->middleware('auth');
	Route::patch('movies/movie/{movie}/edit', [MovieController::class, 'update'])->middleware('auth');
});
Route::controller(DashboardController::class)->group(function () {
	Route::get('/', [QuoteController::class, 'index'])->name('home');
	Route::get('quotes/quote/create', [QuoteController::class, 'create'])->middleware('auth');
	Route::post('quotes/quote/create', [QuoteController::class, 'store'])->middleware('auth');
	Route::delete('quotes/quote/{quote}/delete', [QuoteController::class, 'destroy'])->middleware('auth');
	Route::get('quotes/quote/{quote}/edit', [QuoteController::class, 'edit'])->middleware('auth');
	Route::patch('quotes/quote/{quote}/edit', [QuoteController::class, 'update'])->middleware('auth');
});

// languages controller
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
