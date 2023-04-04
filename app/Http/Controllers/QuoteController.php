<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class QuoteController extends Controller
{
	public function index()
	{
		return view('quote', ['movie' => Movie::all()->first()]);
	}
}
