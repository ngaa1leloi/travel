<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use App\Models\Comment;

class NewsController extends Controller
{
    public function index() {
    	$news = News::paginate(6);

    	return view('page_user.news', compact('news'));
    }

    public function getNewsDetail($id) {
    	$news = News::findOrFail($id);
    	$news_recent = News::orderBy('id', 'ASC')->take(5)->get();
    	$comments = Comment::where('news_id', $id)->get();

    	return view('page_user.news_detail', compact('news', 'news_recent', 'comments'));
    }

    public function comment(Request $request)
    {
        $this->validate($request,
            [
                'content' => 'required|min:3',
            ],
            [
                'content.required' => __('message.comment_require'),
                'content.min' => __('message.comment_min'),
            ]);
        if (Auth::check())
        {   
            $comment = Comment::create([
                'user_id' => Auth::user()->id,
                'news_id' => $request->news_id,
                'content' => $request->content,
            ]);
        }
        else
        {
            return redirect()->route('login');
        }

        return redirect()->back();
    }
}
