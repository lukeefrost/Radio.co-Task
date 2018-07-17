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

Route::get('podcasts/index', 'PodcastController@index');
Route::get('podcasts/create', 'PodcastControllerController@create');
Route::post('podcasts/create', 'PodcastControllerController@store');
Route::get('podcasts/edit/{podcast}', 'PodcastControllerController@edit');
Route::post('podcasts/edit/{podcast}', 'PodcastControllerController@update');
Route::get('podcasts/delete/{podcast}', 'PodcastControllerController@destroy');
Route::get('podcasts/{podcast}', 'PodcastControllerController@show');
