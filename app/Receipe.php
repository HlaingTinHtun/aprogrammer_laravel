<?php

namespace App;

use App\Category;
use App\Events\ReceipeCreatedEvent;
use App\Mail\ReceipeStored;
use Illuminate\Database\Eloquent\Model;

class Receipe extends Model
{
	protected $table = 'receipe';

	protected $fillable = ['name','ingredients','category','author_id'];

	// protected $guarded = [];

	public $dispatchesEvents = [
		'created' => ReceipeCreatedEvent::class,
	];

	protected static function boot()
	{
		parent::boot();

		static::created(function ($receipe){
			
			session()->flash("message",'Receipe has created successfully!');

		});
	}

	public function categories()
    {
        return $this->belongsTo(Category::class,'category');
    }
}


