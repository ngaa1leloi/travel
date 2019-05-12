<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index() {
    	$hotels = Hotel::paginate(6);
    	$current = 'hotel';

    	return view('page_user.hotels', compact('hotels', 'current'));
    }
}
