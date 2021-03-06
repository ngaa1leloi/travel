<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scenic extends Model
{
    protected $fillable = [
    	'name_vi',
    	'name_en',
    	'description_vi',
    	'description_en',
    	'place_id',
    	'image',
    	'slug',
    ];

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
