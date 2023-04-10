<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormRequest\StoreQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;

class QuoteController extends Controller
{
	public function index()
	{
		$randomQuote = Quote::inRandomOrder()->first();
		return view('quote', [
			'quote' => $randomQuote,
		]);
	}

	public function create()
	{
		return view('create-quote', ['movies' => Movie::all()]);
	}

	public function store(StoreQuoteRequest $request)
	{
		$validated = $request->validated();
		$quote = Quote::create($validated);

		$quote->setTranslations('name', ['en' => $request->name_en, 'ka' => $request->name_ka]);
		$quote->thumbnail = $request->file('thumbnail')->store('thumbnail');
		$quote->movie_id = $request->movie_id;
		$quote->save();
		return redirect()->route('dashboard.quotes');
	}

	public function destroy(Quote $quote)
	{
		$quote->delete();
		return redirect()->route('dashboard.quotes');
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

		return redirect()->route('dashboard.quotes');
	}
}
