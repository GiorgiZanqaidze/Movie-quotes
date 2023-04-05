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

	public function create(StoreMovieRequest $request)
	{
		$validated = $request->validated();

		Movie::create($validated);

		return redirect('/');
	}

	public function edit(Movie $movie)
	{
		return view('edit-movie', ['movie' => $movie]);
	}

	public function destroy(Movie $movie)
	{
		$movie->delete();
		return redirect('/');
	}

	public function update(Movie $movie, StoreMovieRequest $request)
	{
		$validated = $request->validated();

		$movie->update($validated);

		return redirect('/');
	}
}
