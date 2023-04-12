<?php

namespace App\Http\Requests\FormRequest;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
{
	public function rules()
	{
		$rules = [
			'name_en'           => 'required|min:3|max:255',
			'name_ka'           => 'required|min:3|max:255',
			'movie_id'          => 'required',
			'thumbnail'         => 'required|image',
		];

		return $rules;
	}
}
