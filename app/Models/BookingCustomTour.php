<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingCustomTour extends Model
{
    protected $table = 'booking_custom_tour';

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
        'start_date',
        'end_date',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
