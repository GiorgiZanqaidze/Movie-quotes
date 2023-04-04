<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class QuoteController extends Controller
{
	public function index()
	{
		return view('quote', ['quote' => Movie::all()->first()->title]);
	}
}
