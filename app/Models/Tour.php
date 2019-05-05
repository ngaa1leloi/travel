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
        'hotel_id',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }

}
