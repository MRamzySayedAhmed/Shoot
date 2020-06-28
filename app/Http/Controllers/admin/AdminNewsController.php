<?php

namespace App\Http\Controllers\admin;
use App\Models\Content;
use App\Http\Requests\NewsRequest;
use App\Traits\AdminNewsTrait;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    use AdminNewsTrait;

    public function show_news()
    {
        $news = Content::get();
        return view('admin.news', compact('news'));
    }

    public function add_news()
    {
        return view('admin.news_add');
    }

    public function insert_news(NewsRequest $request)
    {
        /* Starting The Validation Phase */

        $language = $request->input('language');
        $title = $request->input('title');
        $description = $request->input('description');
        $writer = $request->input('writer');
        $file_name = $this->save_image($request->image, 'admin/layout/images/news');

        /* Starting The Filtration Phase */

        $filtered_title = filter_var($title, FILTER_SANITIZE_STRING);
        $filtered_description = filter_var($description, FILTER_SANITIZE_STRING);
        $filtered_writer = filter_var($writer, FILTER_SANITIZE_STRING);

        Content::create([

            'language' => $language,
            'title' => $filtered_title,
            'description' => $filtered_description,
            'writer' => $filtered_writer,
            'image' => $file_name
        ]);

        return redirect()->route('admin.dashboard')
                         ->with(['success' => 'The News was Successfully Added']);
    }

    public function delete_news($news_id)
    {
        $news = Content::find($news_id);

        $news->delete();

            return redirect()-> route('admin.dashboard') ->with(['success' => 'The News Was Successfully Deleted']);

    }

        public function edit_news($news_id)
            {
                $news = Content::find($news_id);
                return view('admin.news_edit', ['news' => $news]);
            }

        public function update_news(NewsRequest $request, $news_id)
    {
            /* Starting The Validation Phase */

            $news = Content::find($news_id);
            $language = $request->input('language');
            $title = $request->input('title');
            $description = $request->input('description');
            $writer = $request->input('writer');
            $file_name = $this->save_image($request->image, 'admin/layout/images/news');

            /* Starting The Filtration Phase */

            $filtered_title = filter_var($title, FILTER_SANITIZE_STRING);
            $filtered_description = filter_var($description, FILTER_SANITIZE_STRING);
            $filtered_writer = filter_var($writer, FILTER_SANITIZE_STRING);

            $news -> update([
                'language' => $language,
                 'title' => $filtered_title,
                 'description' => $filtered_description,
                 'writer' => $filtered_writer,
                 'image' => $file_name
             ]);

      //  return view('admin.news', ['news' => $news, 'success' => 'The News Was Successfully Updated']);
        return redirect() -> route('admin.dashboard') -> with(['success' => 'The News Was Successfully Edited']);
    }

}
