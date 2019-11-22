@extends('layouts.layouts')

@section('title', 'lacrud')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $drama->title }}</h5>
            <h6>{{ str_repeat("☆",$drama->score) }}</h6>
            <p class="card-text">{{ $drama->content }}</p>

            <div class="d-flex" style="height: 36.4px;">
                <button class="btn btn-outline-primary">Show</button>
                <a href="/dramas/{{ $drama->id }}/edit" class="btn btn-outline-primary">Edit</a>
                <form action="/dramas/{{ $drama->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>

    <a href="/dramas/{{ $drama->id }}/edit">Edit</a> |
    <a href="/dramas">Back</a>

@endsection
