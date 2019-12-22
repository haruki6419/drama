@extends('layouts.layouts')

@section('title', 'ドラマランキング')

@section('content')

<h1>新規投稿</h1>

<form method="POST" action="/posts">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">感想タイトル</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title">
    </div>

    <div class="form-group">
      <label for="drama">ドラマ</label>

      <select name="drama">
        @foreach($dramas as $drama)
        <option value="{{ $drama->id }}">{{$drama->title}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="score">評価</label>

      <select class="rank" name="score">
        <option value="1">★</option>
        <option value="2">★★</option>
        <option value="3">★★★</option>
        <option value="4">★★★★</option>
        <option value="5">★★★★★</option>
      </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">感想</label>
        <textarea type="password" class="form-control" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">投稿</button>
</form>

<a href="/posts">戻る</a>

@endsection
