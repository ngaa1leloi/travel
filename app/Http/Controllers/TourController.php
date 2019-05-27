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
        $current = 'tour';

    	return view('page_user.tours', compact('tours', 'current'));
    }

    public function tourDetail($id) {
        $tour = Tour::findOrFail($id);
        $relate_tours = Tour::where('status', $tour->status)->take(6)->get();
        //dd($relate_tours);
        $current = 'tour';

        return view('page_user.tour_detail', compact('tour', 'relate_tours', 'current'));
    }

    public function getBookingTour($id) {
    	$tour = Tour::findOrFail($id);
        $current = 'tour';

    	return view('page_user.booking_tour', compact('tour', 'current'));
    }

    public function getBookingBuffetTour($id) {
        $tour = Tour::findOrFail($id);
        $current = 'tour';

        return view('page_user.booking_buffet_tour', compact('tour', 'current'));
    }

    public function storeBookingTour(Request $request) {
    	//dd($request['tour_id']);
        $this->validate($request,
            [
                'name' => 'required|min:3',
                'phone' => 'required|regex:/(0)[0-9]{9}$/',
                'email' => 'required|email',
                'address' => 'required|min:3',
                'quantity_adult' => 'required|integer|min:1',
                'quantity_child' => 'integer',
                'quantity_baby' => 'integer',

            ],
            [
                'name.required' => __('message.name_required'),
                'name.min' => __('message.name_min'),
                'phone.required' => __('message.phone'),
                'phone.regex' => __('message.phone_regex'),
                'email.required' => __('message.email'),
                'email.email' => __('message.email_format'),
                'address.required' => __('message.address'),
                'address.min' => __('message.address_min'),

            ]);

        $booking_tour = BookingTour::create([
        	'tour_id' => $request['tour_id'],
        	'name' => $request['name'],
        	'phone' => $request['phone'],
        	'email' => $request['email'],
        	'address' => $request['address'],
        	'quantity_adult' => $request['quantity_adult'],
        	'quantity_child' => $request['quantity_child'],
        	'quantity_baby' => $request['quantity_baby'],
            'payment' => $request['payment'],
        	'note' => $request['note'],
            
        ]);
        $tour = Tour::findOrFail($request['tour_id']);
        $total_person = $request['quantity_child'] + $request['quantity_adult'] + $request['quantity_baby'];
        $tour->quantity_person -= $total_person;
        $tour->save();
        $current = 'tour';
        //dd($booking_tour);
        
        return view('page_user.confirm_booking_tour', compact('booking_tour', 'current'));
    }

    public function storeBookingCustomTour(Request $request) {
        //dd($request['tour_id']);
        $this->validate($request,
            [
                'name' => 'required|min:3',
                'phone' => 'required|regex:/(0)[0-9]{9}$/',
                'email' => 'required|email',
                'address' => 'required|min:3',
                'start_date' => 'required',
                'end_date' => 'required',
                'quantity_adult' => 'required|integer|min:1',
                'quantity_child' => 'integer',
                'quantity_baby' => 'integer',
            ],
            [
                'name.required' => __('message.name_required'),
                'name.min' => __('message.name_min'),
                'phone.required' => __('message.phone'),
                'phone.regex' => __('message.phone_regex'),
                'email.required' => __('message.email'),
                'email.email' => __('message.email_format'),
                'address.required' => __('message.address'),
                'address.min' => __('message.address_min'),
                'start_date.required' => __('message.start_date'),
                'end_date.required' => __('message.end_date'),

            ]);
        $total = $request['total'];

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
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
        ]);
        $current = 'tour';

        return view('page_user.checkout', compact('current', 'booking_tour'));
    }


    public function filter(Request $request)
    {
        $tours = Tour::orderBy('start_date', 'asc');
       // $relate_tours = Tour::where('status', '1');

        if($request['departure']) {
            $tours = $tours->where('departure_vi', 'like', '%' . $request['departure'] . '%');
            //$relate_tours = $relate_tours->where('departure_vi', 'like', '%' . $request['departure'] . '%');
        }

        if($request['name']) {
            $tours = $tours->where('name_en', 'like', '%' . $request['name'] . '%');
            //$relate_tours = $relate_tours->where('departure_vi', 'like', '%' . $request['departure'] . '%');
        }

        if($request['date-from']) {
            $tours = $tours->where('start_date', '>=', $request['date-from']);
        }

        if($request['date-to']) {
            $tours = $tours->where('start_date', '<=', $request['date-to']);
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
        //$relate_tours = $relate_tours->get();
        //dd($tours);
        $current = 'tour';

        return view('page_user.filter', compact('tours', 'current'));
    }
    
}
