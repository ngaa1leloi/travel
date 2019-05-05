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

    public function tourDetail($id) {
        $tour = Tour::findOrFail($id);

        return view('page_user.tour_detail', compact('tour'));
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
            'payment' => $request['payment'],
        ]);
        $tour = Tour::findOrFail($request['tour_id']);
        $tour->quantity_person -= 1;
        $tour->save();
        
        return view('page_user.checkout');
    }

    public function filter(Request $request)
    {
        $tours = Tour::orderBy('date', 'desc');
        if($request['departure']) {
            $tours = $tours->where('departure_vi', 'like', '%' . $request['departure'] . '%');
        }
        if($request['name']) {
            $tours = $tours->where('name_vi', 'like', '%' . $request['name'] . '%');
        }
        if($request['date']) {
            $tours = $tours->where('date', $request['date']);
        }
        if($request['quantity_person']) {
            $tours = $tours->where('quantity_person', '>=', $request['quantity_person']);
        }
        $tours = $tours->get();
        //dd($tours);

        return view('page_user.filter', compact('tours'));
    }
    
}
