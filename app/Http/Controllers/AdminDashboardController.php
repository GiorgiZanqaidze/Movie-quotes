<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

class AdminDashboardController extends Controller
{
	public function show()
	{
		return view('dashboard-movies', [
			'movies' => Movie::all(),
			'quotes' => Quote::all(),
		]);
	}
}
