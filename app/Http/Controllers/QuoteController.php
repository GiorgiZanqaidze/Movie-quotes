<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class QuoteController extends Controller
{
	public function index()
	{
		$randomMovie = Movie::inRandomOrder()->first();
		return view('quote', [
			'movie' => $randomMovie,
		]);
	}
}
