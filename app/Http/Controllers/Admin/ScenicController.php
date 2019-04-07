<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Scenic;
use App\Models\Place;

class ScenicController extends Controller
{
    public function index() {
    	$scenics = Scenic::all();

    	return view('page_admin.scenic.index', compact('scenics'));
    }

    public function create() {
    	$places = Place::all();

    	return view('page_admin.scenic.add', compact('places'));
    }

    public function store(Request $request) {
    	$file = $request->file('image');
        $file->move('source_admin/images', $file->getClientOriginalName());
		$scenic = Scenic::create([
        	'name_vi' => $request['name_vi'],
            'name_en' => $request['name_en'],
            'slug' => str_slug($request['name_vi']),
            'description_vi' => $request['description_vi'],
            'description_en' => $request['description_en'],
            'place_id' => $request['place'],
        	'image' => $file->getClientOriginalName(),
    	]);

		return redirect('admin/scenic/index')->with('message', __('message.add'));
    }

    public function edit($id) {
        $scenic = Scenic::findOrFail($id);
        $places = Place::all();

        return view('page_admin.scenic.edit', compact('scenic', 'places'));
    }

    public function update(Request $request, $id) {
        $scenic = Scenic::findOrFail($id);

        $scenic->name_vi = $request->name_vi;
        $scenic->name_en = $request->name_en;
        $scenic->slug = str_slug($request['name_vi']);
        $scenic->description_vi = $request->description_vi;
        $scenic->description_en = $request->description_en;
        $scenic->place_id = $request->place;
        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $file->move(config('image.source'), $file->getClientOriginalName());
            $scenic->image = $file->getClientOriginalName();
        }
        $scenic->update();

        return redirect('admin/scenic/index')->with('message', __('message.edit'));
    }
}
