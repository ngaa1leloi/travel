<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
    	'name_vi',
    	'name_en',
    	'description_vi',
    	'description_en',
    ];
}
