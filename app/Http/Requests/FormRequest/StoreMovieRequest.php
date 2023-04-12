<?php

namespace App\Http\Requests\FormRequest;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
	public function rules()
	{
		$rules = [
			'title_en'      => 'required|min:3|max:255',
			'title_ka'      => 'required|min:3|max:255',
		];

		return $rules;
	}
}
