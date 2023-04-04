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
}
