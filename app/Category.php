<?php

namespace App;

use App\Receipe;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

    protected $fillable = ['name','description'];

    public function receipe()
    {
        return $this->hasMany(Receipe::class);
    }
}

