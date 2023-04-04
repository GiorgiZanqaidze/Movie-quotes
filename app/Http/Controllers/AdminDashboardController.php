<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class AdminDashboardController extends Controller
{
	public function show()
	{
		return view('dashboard', ['movies' => Movie::all()]);
	}
}
