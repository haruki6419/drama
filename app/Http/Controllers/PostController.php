<?php

namespace App\Http\Controllers;

use App\Post;
use App\Drama;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::all();

      return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dramas = Drama::all();
        return view('posts.create', compact('dramas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $post = new Post();
      $post->title = $request->input('title');
      $post->content = $request->input('content');
      $post->score = $request->input('score');
      $post->drama_id = $request->input('drama');
      $post->save();
      return redirect()->route('posts.show',[$post]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $drama = Drama::find($post->drama_id);
        return view('posts.show', compact('post', 'drama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
      $post->title = $request->input('title');
      $post->content = $request->input('content');
      $post->save();

      return redirect()->route('posts.show', ['id' => $post->id])->with('message', 'Post was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
      $post->delete();

      return redirect()->route('posts.index');
    }
}
