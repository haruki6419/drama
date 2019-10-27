@extends('layouts.layouts')

@section('title', 'lacrud')

@section('content')

<h1>Editing Post</h1>

<form method="POST" action="/posts">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ $post->title }}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Content</label>
        <textarea type="password" class="form-control" name="content">{{ $post->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>

<a href="/posts/{{ $post->id }}">Show</a> |
<a href="/posts">Back</a>

@endsection
