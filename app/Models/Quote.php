<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
	protected $fillable = ['name'];

	protected $guarded = [];

	use HasFactory;

	public function movie()
	{
		return $this->belongsTo(Movie::class, 'movie_id');
	}
}
