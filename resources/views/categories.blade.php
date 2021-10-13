@extends('layouts.main')

@section('container')

<h1 class="mb-5">Post Categories </h1>

@foreach ($categories as $item)

<ul>
    <li>
        <h2><a href="/categories/{{ $item->slug }}"> {{ $item->name }} </a> </h2>
    </li>
</ul>

@endforeach

@endsection
