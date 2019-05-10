<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Place;

class PlaceController extends Controller
{
    public function index() {
        $places = Place::all();

        return view('page_admin.place.index', compact('places'));
    }

    public function create() {
        return view('page_admin.place.add');
    }

    public function store(Request $request) {
        $place = Place::create([
            'name_vi' => $request['name_vi'],
            'name_en' => $request['name_en'],
            'slug' => str_slug($request['name_vi']),
            'description_vi' => $request['description_vi'],
            'description_en' => $request['description_en'],
        ]);
  
        return redirect('admin/place/index')->with('message', __('message.add'));
    }

    public function edit($id) {
        $place = Place::findOrFail($id);

        return view('page_admin.place.edit', compact('place'));
    }

    public function update(Request $request, $id) {
        $place = Place::findOrFail($id);
        $place->name_vi = $request->name_vi;
        $place->name_en = $request->name_en;
        $place->slug = str_slug($request['name_vi']);
        $place->description_vi = $request->description_vi;
        $place->description_en = $request->description_en;
        $place->update();

        return redirect('admin/place/index')->with('message', __('message.edit'));
    }

    public function delete($id)
    {
        $place = Place::findOrFail($id);
        $place->delete();

        return redirect('admin/place/index')->with('message', __('message.delete'));
    }
}
