<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show_news(Request $request)
    {
        $news_number = $request->input('show');
            if(isset($news_number))
            {
                $news = DB::table('contents')->paginate($news_number);
                return view('homepage', ['news' => $news, 'success' => 'The Number of News That Will Be Shown in the Homepage is '. $news_number]);

            }
            else
            {
                $news = DB::table('contents')->paginate(10);
                return view('homepage', ['news' => $news]);
            }
    }

    public function show_news_ar(Request $request)
    {
        $news_ar = DB::table('contents')->where('language', '=', 'ar')->paginate(10);
        return view('homepage_ar', ['news_ar' => $news_ar]);
    }

    public function show_news_en(Request $request)
    {
        $news_number = $request->input('show');
        $news_en = DB::table('contents')->where('language', '=', 'en')->paginate(10);
        return view('homepage_en', ['news_en' => $news_en]);
    }
}
