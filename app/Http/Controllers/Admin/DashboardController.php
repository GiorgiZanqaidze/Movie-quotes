<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Quote;

class DashboardController extends Controller
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
