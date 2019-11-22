@extends('layouts.layouts')

@section('title', 'lacrud')

@section('content')

<h1>ドラマ編集</h1>

<form method="POST" action="/dramas">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ $drama->title }}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Content</label>
        <textarea type="password" class="form-control" name="content">{{ $drama->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>

<a href="/dramas/{{ $drama->id }}">Show</a> |
<a href="/dramas">Back</a>

@endsection
