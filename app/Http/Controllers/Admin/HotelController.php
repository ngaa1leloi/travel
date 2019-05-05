<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Scenic;
use App\Models\Hotel;
use App\Http\Requests\HotelRequest;
use App\Http\Requests\EditHotelRequest;

class HotelController extends Controller
{
    public function index() {
		$hotels = Hotel::all();

		return view('page_admin.hotel.index', compact('hotels'));
	}
	
    public function create() {
    	$scenics = Scenic::all();

    	return view('page_admin.hotel.add', compact('scenics'));
    }

    public function store(HotelRequest $request) {
    	$file = $request->file('image');
        $file->move('source_admin/images', $file->getClientOriginalName());
        $hotel = Hotel::create([
        	'name_vi' => $request['name_vi'],
        	'name_en' => $request['name_en'],
        	'address_vi' => $request['address_vi'],
        	'address_en' => $request['address_en'],
        	'note_vi' => $request['note_vi'],
        	'note_en' => $request['note_en'],
        	'phone' => $request['phone'],
        	'scenic_id' => $request['scenic'],
        	'standard' => $request['standard'],
        	'website' => $request['website'],
        	'image' => $file->getClientOriginalName(),
        ]);
        
        return redirect('admin/hotel/index')->with('message', __('message.add'));
    }

    public function edit($id) {
        $hotel = Hotel::findOrFail($id);
        $scenics = Scenic::all();

        return view('page_admin.hotel.edit', compact('hotel', 'scenics'));
    }

    public function update(EditHotelRequest $request, $id) {
        $hotel = Hotel::findOrFail($id);

        $hotel->name_vi = $request->name_vi;
        $hotel->name_en = $request->name_en;
        $hotel->address_vi = $request->address_vi;
        $hotel->address_en = $request->address_en;
        $hotel->note_vi = $request->note_vi;
        $hotel->note_en = $request->note_en;
        $hotel->phone = $request->phone;
        $hotel->standard = $request->standard;
        $hotel->website = $request->website;
        $hotel->scenic_id = $request->scenic;

        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $file->move(config('image.source'), $file->getClientOriginalName());
            $hotel->image = $file->getClientOriginalName();
        }
        $hotel->update();

        return redirect('admin/hotel/index')->with('message', __('message.edit'));
    }
}
