@extends('layouts.layouts')

@section('title', 'ドラマランキング')

@section('content')
<div class="text-center">
  <h1>ドラマ一覧</h1>
  <a href="/dramas/create">新規作成</a>
</div>

@foreach($dramas as $drama)

    <div class="card my-5">
        <div class="card-body">
            <h5 class="card-title">{{ $drama->title }}</h5>
            <p class="card-text">{{ $drama->content }}</p>

            <div class="d-flex" style="height: 36.4px;">
                <a href="/dramas/{{ $drama->id }}" class="btn btn-outline-primary mr-3">感想</a>
                <a href="/dramas/{{ $drama->id }}/edit" class="btn btn-outline-primary mr-3">編集</a>
                <form action="/dramas/{{ $drama->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-outline-danger">削除</button>
                </form>
            </div>
        </div>
    </div>
@endforeach

@endsection
