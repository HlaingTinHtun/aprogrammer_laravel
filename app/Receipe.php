<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipe extends Model
{
	protected $table = 'receipe';

	protected $fillable = ['name','ingredients','category'];

	// protected $guarded = [];
}
