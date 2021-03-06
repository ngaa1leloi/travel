<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comment extends Model
{
    protected $fillable = [
    	'user_id',
    	'news_id',
    	'content',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
