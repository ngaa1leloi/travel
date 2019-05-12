<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Hotel;
use App\Models\Place;
use App\Models\Scenic;
use App\Models\News;
use App\Models\Contact;

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
        $current = 'home';

        //dd($tour);
        return view('page_user.home', compact('tours', 'buffet_tours', 'hotels', 'news', 'places', 'current'));
    }

    public function getScenic($slug){
        $place = Place::where('slug', $slug)->firstOrFail();
        $scenics = $place->scenics()->get();
        $current = 'home';
       // dd($scenics);

        return view('page_user.scenic', compact('scenics', 'place', 'current'));
    }

    public function getContact() {
        $current = 'contact';

        return view('page_user.contact', compact('current'));
    }

    public function storeContact(Request $request) {
        $this->validate($request,
            [
                'name' => 'required|min:3',
                'phone' => 'required|regex:/(0)[0-9]{9}$/',
                'email' => 'required|email',
                'subject' => 'required|min:3',
                'message' => 'required|min:3',
            ],
            [
                'name.required' => __('message.name_required'),
                'name.min' => __('message.name_min'),
                'phone.required' => __('message.phone'),
                'phone.regex' => __('message.phone_regex'),
                'email.required' => __('message.email'),
                'email.email' => __('message.email_format'),
                'subject.required' => __('message.subject'),
                'subject.min' => __('message.subject_min'),
                'message.required' => __('message.message'),
                'message.min' => __('message.message_min'),

            ]);

        $contact = Contact::create([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'message' => $request['message'],
            'subject' => $request['subject'],
        ]);
        
        return redirect('/')->with('message', __('message.contact_success'));
    }
}
