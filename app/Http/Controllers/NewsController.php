<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use App\Models\Comment;

class NewsController extends Controller
{
    public function index() {
    	$news = News::where('status', 1)->paginate(6);
        $current = 'news';

    	return view('page_user.news', compact('news', 'current'));
    }

    public function getNewsDetail($slug) {
        $current = 'news';
    	$news = News::where('slug', $slug)->firstOrFail();
    	$news_recent = News::orderBy('id', 'ASC')->take(5)->get();
    	$comments = Comment::where('news_id', $news->id)->get();

    	return view('page_user.news_detail', compact('news', 'news_recent', 'comments', 'current'));
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

    public function getPost() {
        $current = 'news';

        return view('page_user.post_news', compact('current'));
    }

    public function postNews(Request $request)
    {
        $this->validate($request,
            [
                'content' => 'required|min:50',
                'title' => 'required|min:3',
                'image' => 'required|image',
            ],
            [
                'content.required' => __('message.content'),
                'content.min' => __('message.content_min'),
                'title.required' => __('message.title'),
                'title.min' => __('message.title_min'),
                'image.required' => __('message.image'),
                'image.image' => __('message.image_format'),
            ]);
        if (Auth::check())
        {   
            $file = $request->file('image');
            $file->move('source_admin/images', $file->getClientOriginalName());
            $new = News::create([
                'user_id' => Auth::user()->id,
                'title_vi' => $request['title'],
                'slug' => str_slug($request['title']),
                'content_vi' => $request->content,
                'image' => $file->getClientOriginalName(),
                'status' => 0
            ]);
        }
        else
        {
            return redirect()->route('login');
        }

        return redirect('news')->with('message', __('message.post_success'));
    }
}
