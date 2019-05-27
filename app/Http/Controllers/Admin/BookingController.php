<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BookingTour;
use App\Models\BookingCustomTour;
use App\Models\Tour;


class BookingController extends Controller
{
    public function getBookingTours() {
    	$bookings = BookingTour::paginate(10);
    	$tours = Tour::where('status', 0)->get();
    	//dd($tours);

    	return view('page_admin.booking.booking_tour', compact('bookings', 'tours'));
    }

    public function getBookingCustomTours() {
    	$bookings = BookingCustomTour::paginate(10);
    	$tours = Tour::withTrashed()->where('status', 1)->get();

    	return view('page_admin.booking.booking_custom_tour', compact('bookings', 'tours'));
    }

    public function filterBooking(Request $request)
    {
        $bookings = BookingTour::orderBy('created_at', 'desc');

        if($request['tour']) {
            $bookings = $bookings->where('tour_id', $request['tour']);
        }

        if($request['status']) {
            $bookings = $bookings->where('status',  $request['status']);
        }
/*
        if($request['start_date']) {
            $bookings = $bookings->where('start_date', $request['start_date']);
        }

        if($request['end_date']) {
            $bookings = $bookings->where('end_date', $request['end_date']);
        }*/

        $bookings = $bookings->paginate(10);
        $tours = Tour::where('status', 0)->get();
        //dd($tours);


        return view('page_admin.booking.booking_tour', compact('tours', 'bookings'));
    }

    public function filterBookingCustom(Request $request)
    {
        $bookings = BookingCustomTour::orderBy('start_date', 'desc');

        if($request['tour']) {
            $bookings = $bookings->where('tour_id', $request['tour']);
        }

        if($request['status']) {
            $bookings = $bookings->where('status',  $request['status']);
        }

        if($request['start_date']) {
            $bookings = $bookings->where('start_date', $request['start_date']);
        }

        if($request['end_date']) {
            $bookings = $bookings->where('end_date', $request['end_date']);
        }

        $bookings = $bookings->paginate(10);
        $tours = Tour::where('status', 1)->get();
        //dd($tours);


        return view('page_admin.booking.booking_custom_tour', compact('tours', 'bookings'));
    }
}
