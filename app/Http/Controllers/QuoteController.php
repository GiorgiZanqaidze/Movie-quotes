<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

class QuoteController extends Controller
{
	public function index()
	{
		// $randomMovie = Movie::inRandomOrder()->first();
		// return view('quote', [
		// 	'movie' => $randomMovie,
		// ]);

		$randomQuote = Quote::inRandomOrder()->first();
		return view('quote', [
			'quote' => $randomQuote,
		]);
	}
}
