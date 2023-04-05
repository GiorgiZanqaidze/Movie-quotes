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
		// $attributes = request()->validate([
		// 	'title'      => 'required|min:3',
		// 	'slug'       => 'required',
		// 	'thumbnail'  => 'required|image',
		// ]);
		// $request['thumbnail'] = request()->file('thumbnail')->store('thumbnail');
		$validated = $request->validated();

		// Movie::create($request);
		Movie::create($validated);

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
