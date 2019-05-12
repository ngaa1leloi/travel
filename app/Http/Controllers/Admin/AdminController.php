<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class AdminController extends Controller
{
    public function index() {
    	return view('page_admin.home');
    }

    public function getContact() {
    	$contacts = Contact::paginate(20);
    	return view('page_admin.contact.index', compact('contacts'));
    }
    

}
