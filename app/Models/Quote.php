<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Quote extends Model
{
	use HasFactory, HasTranslations;

	protected $fillable = ['name', 'movie_id', 'slug', 'thumbnail'];

	public $translatable = ['name'];

	public function movie()
	{
		return $this->belongsTo(Movie::class, 'movie_id');
	}
}
