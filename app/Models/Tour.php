<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

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
    	'start_date',
    	'category_id',
        'hotel_id',
        'status',
        'end_date',
        'place_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }

    public function place() {
        return $this->belongsTo(Place::class);
    }

}
