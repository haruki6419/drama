@extends('layouts.layouts')

@section('title', 'lacrud')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

    <div class="card mt-5">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw&text=ドラマ名：{{$drama->title}}%0a評価：{{ str_repeat('★',$post->score) }}%0a感想はこちら⇒⇒" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <h6>{{ $drama->title }}</h6>
            <h6>{{ str_repeat("★",$post->score) }}</h6>
            <p class="card-text">{{ $post->content }}</p>

            <div class="d-flex" style="height: 36.4px;">
                <button class="btn btn-outline-primary">感想</button>
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-primary">編集</a>
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
