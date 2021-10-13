@extends('layouts.main')

@section('container')
<article>
    <h1>{{ $post->title }}</h1>
    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
        in
        <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a>
    </p>
    {!! $post->body !!}
</article>

<a href="/posts">Back To Blogs</a>
@endsection
