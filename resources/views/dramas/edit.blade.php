@extends('layouts.layouts')

@section('title', 'ドラマランキング')

@section('content')

<h1>ドラマ編集</h1>

<form method="POST" action="/dramas/{{ $drama->id }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group">
        <label for="exampleInputEmail1">ドラマタイトル</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ $drama->title }}">
    </div>

    <div class="form-group">
        <input type="file" name="img">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">感想内容</label>
        <textarea type="password" class="form-control" name="content">{{ $drama->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">投稿</button>
</form>

<a href="/dramas/{{ $drama->id }}">感想</a> |
<a href="/dramas">戻る</a>

@endsection
