<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class AdminMovieController extends Controller
{
	public function index()
	{
		return view('create-movie');
	}

	public function create()
	{
		$attributes = request()->validate([
			'title'      => 'required|min:3',
			'slug'       => 'required',
			'thumbnail'  => 'required|image',
		]);
		$attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnail');

		Movie::create($attributes);

		return redirect('/');
	}

	public function destroy(Movie $movie)
	{
		$movie->delete();
		return redirect('/');
	}

	public function edit(Movie $movie)
	{
		return view('edit-movie', ['movie' => $movie]);
	}

	public function update(Movie $movie)
	{
		$attributes = request()->validate([
			'title'      => 'required|min:3',
			'slug'       => 'required',
			'thumbnail'  => 'required|image',
		]);
		$attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnail');

		$movie->update($attributes);

		return redirect('/');
	}
}
