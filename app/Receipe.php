<?php

namespace App;

use App\Category;
use App\Mail\ReceipeStored;
use Illuminate\Database\Eloquent\Model;

class Receipe extends Model
{
	protected $table = 'receipe';

	protected $fillable = ['name','ingredients','category','author_id'];

	// protected $guarded = [];

	protected static function boot()
	{
		parent::boot();

		static::created(function ($receipe){
			
			session()->flash("message",'Receipe has created successfully!');

        	\Mail::to('hlaingtinhtun97@gmail.com')->send(new ReceipeStored($receipe));

		});
	}

	public function categories()
    {
        return $this->belongsTo(Category::class,'category');
    }
}


