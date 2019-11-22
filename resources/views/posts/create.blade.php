@extends('layouts.layouts')

@section('title', 'drama')

@section('content')

<h1>New Post</h1>

<form method="POST" action="/posts">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title">
    </div>

    <div class="form-group">
      <label for="drama">drama</label>

      <select name="drama">
        @foreach($dramas as $drama)
        <option value="{{ $drama->id }}">{{$drama->title}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="score">Score</label>

      <select class="rank" name="score">
        <option value="1">☆</option>
        <option value="2">☆☆</option>
        <option value="3">☆☆☆</option>
        <option value="4">☆☆☆☆</option>
        <option value="5">☆☆☆☆☆</option>
      </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Content</label>
        <textarea type="password" class="form-control" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>

<a href="/posts">Back</a>

@endsection
