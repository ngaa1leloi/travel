<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
    	'name_vi',
    	'name_en',
    	'address_vi',
    	'address_en',
    	'note_vi',
    	'note_en',
    	'scenic_id',
    	'phone',
    	'website',
    	'standard',
    	'image',
    ];

    public function scenic()
    {
        return $this->belongsTo(Scenic::class);
    }
}
