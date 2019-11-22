<?php

namespace App\Http\Controllers;

use App\Drama;
use Illuminate\Http\Request;

class DramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $dramas = Drama::all();

      return view('dramas.index', compact('dramas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dramas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $drama = new Drama();
      $drama->title = $request->input('title');
      $drama->content = $request->input('content');
      $drama->save();

      return redirect()->route('dramas.show',[$drama]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Drama  $drama
     * @return \Illuminate\Http\Response
     */
    public function show(Drama $drama)
    {
        return view('dramas.show', compact('drama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drama  $drama
     * @return \Illuminate\Http\Response
     */
    public function edit(Drama $drama)
    {
        return view('dramas.edit', compact('drama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drama  $drama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drama $drama)
    {
      $drama->title = $request->input('title');
      $drama->content = $request->input('content');
      $drama->save();

      return redirect()->route('dramas.show', ['id' => $drama->id])->with('message', 'Drama was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drama  $drama
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drama $drama)
    {
      $drama->delete();

      return redirect()->route('dramas.index');
    }
}
