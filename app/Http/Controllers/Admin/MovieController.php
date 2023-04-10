<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormRequest\StoreMovieRequest;
use App\Models\Movie;

class MovieController extends Controller
{
	public function index()
	{
		return view('create-movie');
	}

	public function show(Movie $movie)
	{
		return view('movie', [
			'movie' => $movie,
		]);
	}

	public function create(StoreMovieRequest $request)
	{
		$validated = $request->validated();

		$movie = Movie::create($validated);

		$movie->setTranslations('title', ['en' => request()->title_en, 'ka' => request()->title_ka]);

		$movie->save();

		return redirect()->route('dashboard.movies');
	}

	public function edit(Movie $movie)
	{
		return view('edit-movie', ['movie' => $movie]);
	}

	public function destroy(Movie $movie)
	{
		$movie->delete();
		return redirect()->route('dashboard.movies');
	}

	public function update(Movie $movie, StoreMovieRequest $request)
	{
		$validated = $request->validated();

		$movie->update($validated);

		$movie->setTranslations('title', ['en' => request()->title_en, 'ka' => request()->title_ka]);

		$movie->update();

		return redirect()->route('dashboard.movies');
	}
}
