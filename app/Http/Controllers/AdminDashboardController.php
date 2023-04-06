<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

class AdminDashboardController extends Controller
{
	public function show()
	{
		return view('dashboard');
	}

	public function showMovies()
	{
		return view('movies-dashboard', ['movies' => Movie::all()]);
	}

	public function showQuotes()
	{
		return view('quotes-dashboard', ['quotes' => Quote::all()]);
	}
}
