<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\BookingTour;

class TourController extends Controller
{
    public function index() {
    	$tours = Tour::paginate(6);

    	return view('page_user.tours', compact('tours'));
    }

    public function getBookingTour($id) {
    	$tour = Tour::findOrFail($id);

    	return view('page_user.booking_tour', compact('tour'));
    }

    public function storeBookingTour(Request $request) {
    	//dd($request['tour_id']);
        $booking_tour = BookingTour::create([
        	'tour_id' => $request['tour_id'],
        	'name' => $request['name'],
        	'phone' => $request['phone'],
        	'email' => $request['email'],
        	'address' => $request['address'],
        	'quantity_adult' => $request['quantity_adult'],
        	'quantity_child' => $request['quantity_child'],
        	'quantity_baby' => $request['quantity_baby'],
        	'note' => $request['note'],
        ]);
        
        return redirect('home')->with('message', __('message.add'));
    }
}
