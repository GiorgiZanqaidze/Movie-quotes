<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

class AdminDashboardController extends Controller
{
	public function show()
	{
		return view('dashboard-movies', [
			'movies' => Movie::all(),
			'quotes' => Quote::all(),
		]);
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
		dd(request()->all());
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
