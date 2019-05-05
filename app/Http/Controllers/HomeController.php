<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Hotel;
use App\Models\Place;
use App\Models\Scenic;
use App\Models\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tours = Tour::where('status', 0)->orderBy('date', 'desc')->take(4)->get();
        $buffet_tours = Tour::where('status', 1)->take(4)->get();
        $hotels = Hotel::take(5)->get();
        $news = News::take(3)->get();
        $places = Place::take(6)->get();

        //dd($tour);
        return view('page_user.home', compact('tours', 'buffet_tours', 'hotels', 'news', 'places'));
    }

    public function getScenic($slug){
        $place = Place::where('slug', $slug)->firstOrFail();
        $scenics = $place->scenics()->get();
       // dd($scenics);

        return view('page_user.scenic', compact('scenics', 'place'));
    }
}
