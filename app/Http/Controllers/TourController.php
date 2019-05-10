<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\BookingTour;
use App\Models\BookingCustomTour;

class TourController extends Controller
{
    public function index() {
    	$tours = Tour::paginate(6);

    	return view('page_user.tours', compact('tours'));
    }

    public function tourDetail($id) {
        $tour = Tour::findOrFail($id);
        $relate_tours = Tour::where('status', $tour->status)->take(6)->get();
        //dd($relate_tours);

        return view('page_user.tour_detail', compact('tour', 'relate_tours'));
    }

    public function getBookingTour($id) {
    	$tour = Tour::findOrFail($id);

    	return view('page_user.booking_tour', compact('tour'));
    }

    public function getBookingBuffetTour($id) {
        $tour = Tour::findOrFail($id);

        return view('page_user.booking_buffet_tour', compact('tour'));
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
        $tour = Tour::findOrFail($request['tour_id']);
        $total_person = $request['quantity_child'] + $request['quantity_adult'] + $request['quantity_baby'];
        $tour->quantity_person -= $total_person;
        $tour->save();
        //dd($booking_tour);
        
        return view('page_user.confirm_booking_tour', compact('booking_tour'));
    }

    public function storeBookingCustomTour(Request $request) {
        //dd($request['tour_id']);
        $booking_tour = BookingCustomTour::create([
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
            'start_date' => $request['date_from'],
            'end_date' => $request['date_to'],
        ]);
        
        return view('page_user.checkout');
    }


    public function filter(Request $request)
    {
        $tours = Tour::orderBy('date', 'desc');
        $relate_tours = Tour::where('status', '1');

        if($request['departure']) {
            $tours = $tours->where('departure_vi', 'like', '%' . $request['departure'] . '%');
            $relate_tours = $relate_tours->where('departure_vi', 'like', '%' . $request['departure'] . '%');
        }

        if($request['name']) {
            $tours = $tours->where('name_vi', 'like', '%' . $request['name'] . '%');
            $relate_tours = $relate_tours->where('departure_vi', 'like', '%' . $request['departure'] . '%');
        }

        if($request['date-from']) {
            $tours = $tours->where('date', '>=', $request['date-from']);
        }

        if($request['date-to']) {
            $tours = $tours->where('date', '<=', $request['date-to']);
        }

        if($request['price']) {
            if ($request['price'] == 1) {
                $tours = $tours->where('price', '<', 1000000);
            }
            if ($request['price'] == 2) {
                $tours = $tours->where('price', '>=', 1000000)->where('price', '<=', 2000000);
            }
            if ($request['price'] == 3) {
                $tours = $tours->where('price', '>=', 2000000)->where('price', '<=', 4000000);
            }
            if ($request['price'] == 4) {
                $tours = $tours->where('price', '>=', 4000000)->where('price', '<=', 7000000);
            }
            if ($request['price'] == 5) {
                $tours = $tours->where('price', '>=', 1000000);
            }
        }
        $tours = $tours->get();
        $relate_tours = $relate_tours->get();
        //dd($tours);


        return view('page_user.filter', compact('tours', 'relate_tours'));
    }
    
}
