<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
	public function show(Movie $movie)
	{
		return view('movie', ['movie' => $movie]);
	}
}
