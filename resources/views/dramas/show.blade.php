@extends('layouts.layouts')

@section('title', 'lacrud')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

    <div class="card mt-5">
        <div class="card-body">
            <h5 class="card-title">{{ $drama->title }}</h5>
            <h6>{{ str_repeat("☆",$drama->score) }}</h6>
            <p class="card-text">{{ $drama->content }}</p>

            <div class="d-flex" style="height: 36.4px;">
                <button class="btn btn-outline-primary">感想</button>
                @auth
                <a href="/dramas/{{ $drama->id }}/edit" class="btn btn-outline-primary">編集</a>
                <form action="/dramas/{{ $drama->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-outline-danger">削除</button>
                </form>
                @endauth
            </div>
        </div>
    </div>

    <a href="/dramas/{{ $drama->id }}/edit">編集</a> |
    <a href="/dramas">戻る</a>

@endsection
