<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\QuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::controller(AuthController::class)->group(function () {
	Route::get('login', [AuthController::class, 'create'])->middleware('guest')->name('login.create');
	Route::post('login', [AuthController::class, 'login'])->middleware('guest')->name('login.post');
	Route::post('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout.post');
});

Route::controller(DashboardController::class)->group(function () {
	Route::get('dashboard', [DashboardController::class, 'show'])->middleware('auth')->name('dashboard.show');
	Route::get('dashboard/movies', [DashboardController::class, 'movies'])->middleware('auth')->name('dashboard.movies');
	Route::get('dashboard/quotes', [DashboardController::class, 'quotes'])->middleware('auth')->name('dashboard.quotes');
});
Route::controller(MovieController::class)->group(function () {
	Route::get('movies/{movie}', [MovieController::class, 'show'])->name('movie.show');
	Route::get('movies/movie/create', [MovieController::class, 'index'])->middleware('auth')->name('movies.index');
	Route::post('movies/movie/create', [MovieController::class, 'create'])->middleware('auth')->name('movies.create');
	Route::delete('movies/movie/{movie}/delete', [MovieController::class, 'destroy'])->middleware('auth')->name('movies.destroy');
	Route::get('movies/movie/{movie}/edit', [MovieController::class, 'edit'])->middleware('auth')->name('movies.edit');
	Route::patch('movies/movie/{movie}/edit', [MovieController::class, 'update'])->middleware('auth')->name('movies.update');
});
Route::controller(QuoteController::class)->group(function () {
	Route::get('/', [QuoteController::class, 'index'])->name('home');
	Route::get('quotes/quote/create', [QuoteController::class, 'create'])->middleware('auth')->name('quotes.create');
	Route::post('quotes/quote/create', [QuoteController::class, 'store'])->middleware('auth')->name('quotes.store');
	Route::delete('quotes/quote/{quote}/delete', [QuoteController::class, 'destroy'])->middleware('auth')->name('quotes.destroy');
	Route::get('quotes/quote/{quote}/edit', [QuoteController::class, 'edit'])->middleware('auth')->name('quotes.edit');
	Route::patch('quotes/quote/{quote}/edit', [QuoteController::class, 'update'])->middleware('auth')->name('quotes.update');
});

// languages controller
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
