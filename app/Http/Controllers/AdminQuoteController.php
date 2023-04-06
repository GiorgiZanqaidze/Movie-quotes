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
			'name'           => 'required|min:5|max:255',
			'movie_id'       => 'required',
			'slug'           => 'required|min:10|max:255',
			'thumbnail'      => 'required|image',
		]);

		$attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnail');

		Quote::create($attributes);

		return redirect('/');
	}

	public function destroy(Quote $quote)
	{
		$quote->delete();
		return redirect('/dashboard/movies');
	}

	public function edit(Quote $quote)
	{
		return view('edit-quote', [
			'quote'  => $quote,
			'movies' => Movie::all(),
		]);
	}

	public function update(Quote $quote)
	{
		$attributes = request()->validate([
			'name'           => 'required|min:5|max:255',
			'movie_id'       => 'required',
			'slug'           => 'required|min:10|max:255',
			'thumbnail'      => 'required|image',
		]);

		$attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnail');

		$quote->update($attributes);

		return redirect('/');
	}
}
