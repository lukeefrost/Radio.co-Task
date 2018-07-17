<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Podcast;

class PodcastController extends Controller
{

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    // Get all Podcasts from the database
    $podcasts = Podcast::all();
    return view('podcasts.index', compact('podcasts'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    // Show the create podcast view
    return view('podcasts.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $this->validate($request, [
      '' => 'required',
      '' => 'required',
      '' => 'required',
      '' => 'required',
    ]);
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show(Podcast $podcast)
  {
    return view('podcasts.show', compact('podcast'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit(Podcast $podcast)
  {
    return view('podcasts.edit', compact('podcast'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Podcast $podcast)
  {
    $this->validate($request, [
      '' => 'required',
      '' => 'required',
      '' => 'required',
      '' => 'required',
    ]);

    $podcast->update($request->all());
    return back();
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy(Podcast $podcast)
  {
    $podcast->delete();
    return back()->with('success', 'Podcast deleted successfully');
  }

}
