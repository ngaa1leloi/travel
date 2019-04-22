<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tour;
use App\Http\Requests\TourRequest;

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

    public function store(TourRequest $request) {
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

    public function edit($id) {
        $tour = Tour::findOrFail($id);
        $categories = Category::all();

        return view('page_admin.tour.edit', compact('tour', 'categories'));
    }

    public function update(Request $request, $id) {
        $tour = Tour::findOrFail($id);

        $tour->name_vi = $request->name_vi;
        $tour->name_en = $request->name_en;
        $tour->process_en = $request->process_en;
        $tour->process_vi = $request->process_vi;
        $tour->departure_vi = $request->departure_vi;
        $tour->departure_en = $request->departure_en;
        $tour->price = $request->price;
        $tour->quantity_person = $request->quantity_person;
        $tour->time = $request->time;
        $tour->date = $request->date;
        $tour->category_id = $request->category;

        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $file->move(config('image.source'), $file->getClientOriginalName());
            $tour->image = $file->getClientOriginalName();
        }
        $tour->update();

        return redirect('admin/tour/index')->with('message', __('message.edit'));
    }
}
