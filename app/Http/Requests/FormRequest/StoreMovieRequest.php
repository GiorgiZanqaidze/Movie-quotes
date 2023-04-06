<?php

namespace App\Http\Requests\FormRequest;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'title'      => 'required|min:3|max:255',
			'slug'       => 'required|min:10|max:255',
		];
	}
}
