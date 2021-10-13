@extends('layouts.main')

@section('container')

<h1 class="mb-5">{{ $title }} </h1>

@foreach ($posts as $item)
<article class="mb-5 border-bottom pb-4">
    {{-- Title --}}
    <h2><a href="/posts/{{ $item->slug }}" class="text-decoration-none"> {{ $item->title }} </a> </h2>

    {{-- Author --}}
    <p>By. <a href="/authors/{{ $item->author->username }}" class="text-decoration-none">{{ $item->author->name }}</a>
        in
        <a href="/categories/{{ $item->category->slug }}" class="text-decoration-none"> {{
            $item->category->name }} </a>
    </p>

    {{-- Excerpt --}}
    <p>{{ $item->excerpt }}</p>

    <a href="/posts/{{ $item->slug }}" class="text-decoration-none">Read more..</a>
</article>
@endforeach

@endsection
