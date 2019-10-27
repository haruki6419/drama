@extends('layouts.layouts')

@section('title', 'lacrud')

@section('content')
    @if (session('message'))
        {{ session('message') }}
    @endif

    {{ $post->title }}
    {{ $post->content }}
@endsection 
