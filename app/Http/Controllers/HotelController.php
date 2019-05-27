<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Tour;

class HotelController extends Controller
{
    public function index() {
    	$hotels = Hotel::paginate(6);
    	$current = 'hotel';

    	return view('page_user.hotels', compact('hotels', 'current'));
    }

    public function hotelDetail($id) {
        $hotel = Hotel::findOrFail($id);
        $relate_tours = Tour::where('hotel_id', $hotel->id)->take(6)->get();
        //dd($relate_tours);
        $current = 'hotel';

        return view('page_user.hotel_detail', compact('hotel', 'relate_tours', 'current'));
    }
}
