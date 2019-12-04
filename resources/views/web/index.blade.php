@extends('layouts.layouts')

@section('title', 'drama')

@section('content')

<div class="jumbotron">
  <h1 class="display-4">ようこそ！ドラマランキングへ</h1>
  <p class="lead">このサイトでは今話題のドラマの感想を気軽に投稿できるサイトです。</p>
  <hr class="my-4">
  <p></p>
  <div class="d-flex justify-content-center">
    <a class="btn btn-primary btn-lg" href="/posts" role="button">感想をチェック！</a>
  </div>
</div>

<h2 class="text-center">人気ドラマ一覧</h2>
<div class="row">
  @for($i = 0; $i < 3; $i++)
  <div class="col-4 mx-auto d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{ $popular_dramas[$i]["title"] }}</h5>
        <p class="card-text">{{ Str::limit($popular_dramas[$i]["content"], 100) }}</p>
        <a href="/dramas/{{ $popular_dramas[$i]["id"] }}" class="btn btn-primary">詳細を見る</a>
      </div>
    </div>
  </div>
  @endfor
</div>



<h2 class="text-center">新着ドラマ一覧</h2>
<div class="row">
  @foreach($recently_dramas as $drama)
  <div class="col-4 mx-auto d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{ $drama->title }}</h5>
        <p class="card-text">{{ Str::limit($drama->content, 100) }}</p>
        <a href="/dramas/{{ $drama->id }}" class="btn btn-primary">詳細を見る</a>
      </div>
    </div>
  </div>
  @endforeach
</div>







@endsection
