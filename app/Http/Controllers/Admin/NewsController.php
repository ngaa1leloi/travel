<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\EditNewsRequest;

class NewsController extends Controller
{
    public function index() {
    	$news = News::all();

    	return view('page_admin.news.index', compact('news'));
    }

    public function create() {
    	return view('page_admin.news.add');
    }

    public function store(NewsRequest $request) {
    	$file = $request->file('image');
        $file->move('source_admin/images', $file->getClientOriginalName());
    	if(isset($_POST['save'])) {
    		$news = News::create([
	        	'title_vi' => $request['title_vi'],
	        	'title_en' => $request['title_en'],
	        	'slug' => str_slug($request['title_vi']),
	        	'content_vi' => $request['content_vi'],
	        	'content_en' => $request['content_en'],
	        	'status' => 0,
	        	'image' => $file->getClientOriginalName(),
        	]);
        
		} else if (isset($_POST['publish'])) {
			$news = News::create([
	        	'title_vi' => $request['title_vi'],
	        	'title_en' => $request['title_en'],
	        	'slug' => str_slug($request['title_vi']),
	        	'content_vi' => $request['content_vi'],
	        	'content_en' => $request['content_en'],
	        	'status' => 1,
	        	'image' => $file->getClientOriginalName(),
        	]);
		}

		return redirect('admin/news/index')->with('message', __('message.add'));
    }

    public function edit($id) {
        $news = News::findOrFail($id);

        return view('page_admin.news.edit', compact('news'));
    }

    public function update(EditNewsRequest $request, $id) {
        $news = News::findOrFail($id);

        $news->title_vi = $request->title_vi;
        $news->title_en = $request->title_en;
        $news->slug = str_slug($request['title_vi']);
        $news->content_vi = $request->content_vi;
        $news->content_en = $request->content_en;

        if (isset($_POST['save'])) {
        	$news->status = 0;
        } else if (isset($_POST['publish'])) {
        	$news->status = 1;
        }

        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $file->move(config('image.source'), $file->getClientOriginalName());
            $news->image = $file->getClientOriginalName();
        }
        $news->update();

        return redirect('admin/news/index')->with('message', __('message.edit'));
    }
}
