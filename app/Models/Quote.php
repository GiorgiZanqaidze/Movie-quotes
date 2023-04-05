<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
	protected $fillable = ['name', 'movie_id'];

	// protected $guarded = [];

	use HasFactory;

	public function movie()
	{
		return $this->belongsTo(Movie::class, 'movie_id');
	}
}
