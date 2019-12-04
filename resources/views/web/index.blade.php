@extends('layouts.layouts')

@section('title', 'drama')

@section('content')

<h1>ドラマランキング</h1>

<ul>
  <a href="../dramas/{{ $result[0]['id'] }}">
    <li>1位のドラマ</li>
  </a>
  <a href="../dramas/{{ $result[1]['id'] }}">
    <li>2位のドラマ</li>
  </a>
  <a href="../dramas/{{ $result[2]['id'] }}">
    <li>3位のドラマ</li>
  </a>
</ul>


@endsection