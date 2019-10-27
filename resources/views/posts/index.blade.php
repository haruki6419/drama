<h1>Posts</h1>

@foreach($posts as $post)
    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
    <a href="/posts/{{ $post->id }}/edit">Edit</a>
@endforeach

<a href="/posts/create">New Post</a>

@if (session('message'))
        {{ session('message') }}
    @endif

    {{ $post->title }}
    {{ $post->content }}

    <a href="/posts/{{ $post->id }}/edit">Edit</a>
