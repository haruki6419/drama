@extends('layouts.layouts')

@section('title', 'ドラマランキング')

@section('content')

<h1>ドラマ新規作成</h1>

<form method="POST" action="/dramas" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">ドラマタイトル</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title">
    </div>

    <!-- 画像追加 -->
    <div class="form-group">
        <input type="file" name="img">
    </div>





    <div class="form-group">
        <label for="exampleInputPassword1">あらすじ</label>
        <textarea type="password" class="form-control" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">登録</button>
</form>

<a href="/dramas">戻る</a>

@endsection
