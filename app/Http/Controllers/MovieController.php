<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

class MovieController extends Controller
{
	public function show(Movie $movie, Quote $quotes)
	{
		return view('movie', [
			'movie' => $movie,
		]);
	}
}
