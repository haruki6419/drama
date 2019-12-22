@extends('layouts.layouts')

@section('title', 'ドラマランキング')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

    <div class="card mt-5">
        <div class="card-body">
            <h5 class="card-title">タイトル：{{ $drama->title }}</h5>
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw&text=ドラマ名：{{$drama->title}}%0a評価：{{ str_repeat('★',$post->score) }}%0a感想はこちら⇒⇒" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <div class="fb-share-button" data-href="https://localhost:8000/posts/{{$post->id}}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">シェア</a></div>
            <h6>{{ $post->title }}</h6>
            <h6>評価：{{ str_repeat("★",$post->score) }}</h6>
            <p class="card-text">内容：{{ $post->content }}</p>

            <div class="d-flex" style="height: 36.4px;">
                <button class="btn btn-outline-primary mr-3">感想</button>
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-primary mr-3">編集</a>
                <form action="/posts/{{ $post->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-outline-danger">削除</button>
                </form>
            </div>
        </div>
    </div>

    <a href="/posts/{{ $post->id }}/edit">編集</a> |
    <a href="/posts">戻る</a>

@endsection
