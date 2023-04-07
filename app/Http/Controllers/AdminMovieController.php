<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequest\StoreMovieRequest;
use App\Models\Movie;

class AdminMovieController extends Controller
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

		return redirect('/');
	}

	public function edit(Movie $movie)
	{
		return view('edit-movie', ['movie' => $movie]);
	}

	public function destroy(Movie $movie)
	{
		$movie->delete();
		return redirect('/dashboard/movies');
	}

	public function update(Movie $movie, StoreMovieRequest $request)
	{
		$validated = $request->validated();

		$movie->update($validated);

		$movie->setTranslations('title', ['en' => request()->title_en, 'ka' => request()->title_ka]);

		$movie->update();

		return redirect('/');
	}
}
