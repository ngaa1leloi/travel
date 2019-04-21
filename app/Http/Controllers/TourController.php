<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    public function index() {
    	$tours = Tour::paginate(6);

    	return view('page_user.tours', compact('tours'));
    }
}
