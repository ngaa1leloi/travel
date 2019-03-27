<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
    	'name_vi',
    	'name_en',
    	'departure_vi',
    	'departure_en',
    	'process_vi',
    	'process_en',
    	'image',
    	'price',
    	'quantity_person',
    	'time',
    	'date',
    	'category_id',
    ];
}
