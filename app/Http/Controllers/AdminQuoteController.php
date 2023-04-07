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
		// $attributes = request()->validate([
		// 	'name_en'           => 'required|min:5|max:255',
		// 	'movie_id'       => 'required',
		// 	'slug'           => 'required|min:10|max:255',
		// 	'thumbnail'      => 'required|image',
		// ]);

		// $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnail');

		// Quote::create($attributes);

		// dd(request()->all());

		$quote = new Quote();
		$quote->movie_id = request()->movie_id;
		$quote->thumbnail = request()->file('thumbnail')->store('thumbnail');
		$quote->setTranslations('name', ['en' => request()->name_en, 'ka' => request()->name_ka]);
		$quote->save();

		return redirect('/dashboard');
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
		// $attributes = request()->validate([
		// 	'name'           => 'required|min:5|max:255',
		// 	'movie_id'       => 'required',
		// 	'slug'           => 'required|min:10|max:255',
		// 	'thumbnail'      => 'required|image',
		// ]);

		// $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnail');

		// $quote->update($attributes);

		$quote->movie_id = request()->movie_id;
		$quote->thumbnail = request()->file('thumbnail')->store('thumbnail');
		$quote->setTranslations('name', ['en' => request()->name_en, 'ka' => request()->name_ka]);
		$quote->save();

		return redirect('/dashboard');
		return redirect('/');
	}
}
