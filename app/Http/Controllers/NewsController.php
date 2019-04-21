<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index() {
    	$news = News::paginate(6);

    	return view('page_user.news', compact('news'));
    }

    public function getNewsDetail($id) {
    	$news = News::find($id);

    	return view('page_user.news_detail', compact('news'));
    }
}
