@extends('layouts.layouts')

@section('title', 'lacrud')

@section('content')

<h1>Editing Post</h1>

<form method="POST" action="/posts">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">ドラマタイトル</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ $post->title }}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">感想</label>
        <textarea type="password" class="form-control" name="content">{{ $post->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">投稿</button>
</form>

<a href="/posts/{{ $post->id }}">感想</a> |
<a href="/posts">戻る</a>

@endsection
