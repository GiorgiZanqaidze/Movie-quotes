<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequest\StoreQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;

class AdminQuoteController extends Controller
{
	public function create()
	{
		return view('create-quote', ['movies' => Movie::all()]);
	}

	public function store(StoreQuoteRequest $request)
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

		// $quote = new Quote();
		// $quote->movie_id = request()->movie_id;
		// $quote->thumbnail = request()->file('thumbnail')->store('thumbnail');
		// $quote->setTranslations('name', ['en' => request()->name_en, 'ka' => request()->name_ka]);
		// $quote->save();

		$validated = $request->validated();
		$quote = Quote::create($validated);

		$quote->setTranslations('name', ['en' => $request->name_en, 'ka' => $request->name_ka]);
		$quote->thumbnail = $request->file('thumbnail')->store('thumbnail');
		$quote->movie_id = $request->movie_id;
		$quote->save();
		return redirect('/dashboard');
	}

	public function destroy(Quote $quote)
	{
		$quote->delete();
		return redirect('/dashboard/quotes');
	}

	public function edit(Quote $quote)
	{
		return view('edit-quote', [
			'quote'  => $quote,
			'movies' => Movie::all(),
		]);
	}

	public function update(Quote $quote, StoreQuoteRequest $request)
	{
		$quote->setTranslations('name', ['en' => $request->name_en, 'ka' => $request->name_ka]);
		$quote->thumbnail = $request->file('thumbnail')->store('thumbnail');
		$quote->movie_id = $request->movie_id;
		$quote->update();

		return redirect('/dashboard');
	}
}
