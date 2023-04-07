<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
	public function create()
	{
		return view('login');
	}

	public function login()
	{
		$attributes = request()->validate([
			'email'    => 'required|email',
			'password' => 'required',
		]);

		if (!auth()->attempt($attributes)) {
			throw ValidationException::withMessages([
				'email' => 'Your provided credentials could not be verified',
			]);
		}

		session()->regenerate();

		return redirect('/')->with('success', 'Welcome Back!');
	}

	public function logout()
	{
		auth()->logout();
		return redirect('/');
	}
}
