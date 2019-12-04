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

<ul>
  <a href="../dramas"><li>1位のドラマ</li></a>
  <a href="../dramas"><li>2位のドラマ</li></a>
  <a href="../dramas"><li>3位のドラマ</li></a>
</ul>


@endsection
