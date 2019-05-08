<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
    	'title_vi',
    	'title_en',
    	'content_en',
    	'content_vi',
    	'image',
    	'status',
    	'user_id',
    	'slug',
    ];

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
