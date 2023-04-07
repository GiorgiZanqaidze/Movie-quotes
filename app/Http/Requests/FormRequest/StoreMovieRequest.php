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
		$rules = [
			'title_en'      => 'required|min:3|max:255',
			'title_ka'      => 'required|min:3|max:255',
		];

		// foreach (config('app.available_locales') as $locale) {
		// 	$rules['title_' . $locale] = 'string';
		// }

		// return [
		// 	'title'      => 'required|min:3|max:255',
		// 	'slug'       => 'required|min:10|max:255',
		// ];

		return $rules;
	}
}
