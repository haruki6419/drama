@extends('layouts.layouts')

@section('title', 'ドラマランキング')

@section('content')
<h1>感想</h1>

@foreach($posts as $post)

    <div class="card my-3 p-3">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>

            <div class="d-flex" style="height: 36.4px;">
                <a href="/posts/{{ $post->id }}" class="btn btn-outline-primary">感想</a>
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-primary">編集</a>
                <form action="/posts/{{ $post->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-outline-danger">削除</button>
                </form>
            </div>
        </div>
    </div>
@endforeach

<a href="/posts/create">新規投稿</a>
@endsection
