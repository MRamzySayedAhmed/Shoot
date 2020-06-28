<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Config\Repository;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Session;
use Illuminate\Session\Store;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Starting The User Routes

Route::get('/', 'NewsController@show_news')->name('homepage');

Route::get('/ar', 'NewsController@show_news_ar')->name('lang_ar');

Route::get('/en', 'NewsController@show_news_en')->name('lang_en');

// Starting The Admin Routes

Route::prefix('admin')->group(function () {

    Route::get('login', function () {
        return view('admin.login');
    });

    Route::post('login_verify', 'admin\AdminUserController@login')->name('admin.login');

    Route::get('dashboard', 'admin\AdminStaticsController@show_statics')
        ->name('admin.dashboard')->middleware('guest');

    Route::get('logout', 'admin\AdminUserController@logout')->middleware('guest');

    Route::get('news', 'admin\AdminNewsController@show_news')->middleware('guest');

    Route::get('news_add', 'admin\AdminNewsController@add_news')->middleware('guest');

    Route::post('news_insert', 'admin\AdminNewsController@insert_news');

});

Route::get('news_edit/{news_id}', 'admin\AdminNewsController@edit_news')
    ->name('news_edit')->middleware('guest');

Route::post('news_update/{news_id}', 'admin\AdminNewsController@update_news')
    ->name('news_update');

Route::get('news_delete/{news_id}', 'admin\AdminNewsController@delete_news')
    ->name('news_delete')->middleware('guest');
