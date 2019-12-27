@extends('layouts.layouts')

@section('title', 'ドラマランキング')

@section('content')

<div class="jumbotron jumbotron-fluid text-center mt-5">
  <h1 class="display-4 my-5">ようこそ！ドラマランキングへ</h1>
  <p class="lead mb-5">このサイトは今話題のドラマの感想を気軽に投稿できるサイトです。</p>
  <div class="d-flex justify-content-center">
    <a class="btn btn-primary btn-lg" href="/posts" role="button">感想をチェック！</a>
  </div>
</div>

<h2 class="text-center mt-5 mb-3">人気ドラマ一覧</h2>
<div class="row">
  @if(!empty($popular_dramas))
  @for($i = 0; $i < 3; $i++)
    @if(!empty($popular_dramas[$i]))
      <div class="col-4 mx-auto d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <div class="card-body text-center">
            <h5 class="card-title mb-4">～ {{ $popular_dramas[$i]["title"] }} ～</h5>
            <p class="card-text">{{ Str::limit($popular_dramas[$i]["content"], 100) }}</p>
            <a href="/dramas/{{ $popular_dramas[$i]["id"] }}" class="btn btn-primary">詳細を見る</a>
          </div>
        </div>
      </div>
    @endif
  @endfor
  @endif
</div>



<h2 class="text-center mt-5 mb-3">新着ドラマ一覧</h2>
<div class="row">
  @if(!empty($recently_dramas))
  @foreach($recently_dramas as $drama)
  <div class="col-4 mx-auto d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
      <div class="card-body text-center">
        <h5 class="card-title">～ {{ $drama->title }} ～</h5>
        <p class="card-text">{{ Str::limit($drama->content, 100) }}</p>
        <a href="/dramas/{{ $drama->id }}" class="btn btn-primary">詳細を見る</a>
      </div>
    </div>
  </div>
  @endforeach
  @endif
</div>







@endsection
