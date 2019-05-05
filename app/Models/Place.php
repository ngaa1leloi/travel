<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
        'name_vi',
        'name_en',
        'slug',
        'description_vi',
        'description_en',
    ];

    public function scenics()
    {
        return $this->hasMany(Scenic::class);
    }
}
