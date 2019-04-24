<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingTour extends Model
{
    protected $table = 'booking_tour';

    protected $fillable = [
    	'tour_id',
    	'name',
    	'phone',
    	'email',
    	'address',
    	'quantity_adult',
    	'quantity_child',
    	'quantity_baby',
    	'note',
    	'payment',
    ];
}
