<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

class AdminQuoteController extends Controller
{
	public function create()
	{
		return view('create-quote', ['movies' => Movie::all()]);
	}

	public function store()
	{
		$attributes = request()->validate([
			'name'           => 'required|min:5',
			'movie_id'       => 'required',
		]);

		Quote::create($attributes);

		return redirect('/');
	}
}
