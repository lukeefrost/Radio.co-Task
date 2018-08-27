<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('upload', function() {
    $files = Storage::disk('spaces')->files('uploads');

    return view('upload', compact('files'));
});

Route::post('upload', function() {
    Storage::disk('spaces')->putFile('uploads', request()->file, 'public');

    return redirect()->back();
});

Route::get('podcasts/index', 'PodcastController@index');
Route::get('podcasts/create', 'PodcastController@create');
Route::post('podcasts/create', 'PodcastController@store');
Route::get('podcasts/edit/{podcast}', 'PodcastController@edit');
Route::post('podcasts/edit/{podcast}', 'PodcastController@update');
Route::get('podcasts/delete/{podcast}', 'PodcastController@destroy');
Route::get('podcasts/show/{podcast}', 'PodcastController@show');
