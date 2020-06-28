<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Content;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminStaticsController extends Controller
{
    public function show_statics(Request $request)
    {
        $selected_news_number = $request -> input('latest');

        // Getting The Number Of Users
        $users = User::get();
        $users_number = count($users);

        // Getting The Number Of News
        $news = Content::get();
        $news_number = count($news);

        // Getting The Latest 10 News

        $latest_news = DB::table('contents')
                ->limit($selected_news_number)
                ->get();
        if(isset($selected_news_number))
        {
            return view('admin.dashboard', ['users_number' => $users_number,'news_number' => $news_number, 'latest_news' => $latest_news, 'selected_news_number' => $selected_news_number, 'success' => 'You Have Selected to View the Latest '. $selected_news_number. ' News']);
        }
        else
        {
            return view('admin.dashboard', ['users_number' => $users_number,'news_number' => $news_number, 'latest_news' => $latest_news, 'selected_news_number' => $selected_news_number]);
        }
    }
}
