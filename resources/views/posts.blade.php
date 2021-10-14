@extends('layouts.main')

@section('container')

<h1 class="mb-3 text-center">{{ $title }} </h1>

{{-- Jika ada post maka tampilkan ini --}}
@if ($posts->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    <div class="card-body text-center">
        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{
                $posts[0]->title }}</a> </h3>
        {{-- Author --}}
        <p>
            <small class="text-muted"> By. <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in
                <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none"> {{
                    $posts[0]->category->name }} </a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }} </p>

        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary"> Read more </a>
    </div>
</div>

<div class="container">
    <div class="row">

        {{-- Mengulang kecuali post pertama menggukan skip--}}
        @foreach ($posts->skip(1) as $item)
        <div class="col-md-4 mb-3">
            <div class="card">
                {{-- Category --}}
                <div class="position-absolute bg-dark px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                    <a href="/categories/{{ $item->category->slug }}" class="text-white text-decoration-none"> {{ $item->category->name }}</a>
                </div>
                {{-- Image --}}
                <img src="https://source.unsplash.com/500x400?{{ $item->category->name }}" class="card-img-top" alt="{{ $item->category->name }}">
                <div class="card-body">
                    {{-- Title --}}
                    <h5 class="card-title">{{ $item->title }}</h5>
                    {{-- Author --}}
                    <p>
                        <small class="text-muted"> By. <a href="/authors/{{ $item->author->username }}" class="text-decoration-none">{{ $item->author->name }}</a>
                            {{ $item->created_at->diffForHumans() }}
                        </small>
                    </p>
                    {{-- Excerpt --}}
                    <p class="card-text">{{ $item->excerpt }}</p>
                    <a href="/posts/{{ $item->slug }}" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

{{-- Jika tidak ada post maka tampilkan ini --}}
@else
<p class="text-center fs-4">No post found</p>
@endif

@endsection
