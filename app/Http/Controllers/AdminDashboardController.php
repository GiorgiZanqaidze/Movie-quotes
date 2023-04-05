<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class AdminDashboardController extends Controller
{
	public function show()
	{
		return view('dashboard-movies', ['movies' => Movie::all()]);
	}

	public function destroy(Movie $movie)
	{
		$movie->delete();
		return redirect('/');
	}

	public function edit()
	{
		return view('dashboard-movies', ['movies' => Movie::all()]);
	}

	public function update()
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
}
