<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tour;

class TourController extends Controller
{
	public function index() {
		$tours = Tour::all();

		return view('page_admin.tour.index', compact('tours'));
	}
	
    public function create() {
    	$categories = Category::all();

    	return view('page_admin.tour.add', compact('categories'));
    }

    public function store(Request $request) {
    	$file = $request->file('image');
        $file->move('source_admin/images', $file->getClientOriginalName());
        $tour = Tour::create([
        	'name_vi' => $request['name_vi'],
        	'name_en' => $request['name_en'],
        	'process_vi' => $request['process_vi'],
        	'process_en' => $request['process_en'],
        	'departure_vi' => $request['departure_vi'],
        	'departure_en' => $request['departure_en'],
        	'price' => $request['price'],
        	'quantity_person' => $request['quantity_person'],
        	'time' => $request['time'],
        	'date' => $request['date'],
        	'category_id' => $request['category'],
        	'image' => $file->getClientOriginalName(),
        ]);
        
        return redirect('admin/tour/create')->with('message', __('message.add'));
    }
}
