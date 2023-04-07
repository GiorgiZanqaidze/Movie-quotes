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

	public function movies()
	{
		return view('movies-dashboard', ['movies' => Movie::all()]);
	}

	public function quotes()
	{
		return view('quotes-dashboard', ['quotes' => Quote::all()]);
	}
}
