<?php

namespace App\Http\Controllers;

class MovieController extends Controller
{
	public function show()
	{
		return view('movie', ['quote' => 'movie name']);
	}
}
