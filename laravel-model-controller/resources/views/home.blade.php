@extends('partials/layout')

@section('title')
    DataBase Movies
@endsection

@section('content-movie')
    @foreach ($movies as $movie)
        <img src="{{ $movie->getImage() }}" alt="{{ $movie->title }}">
        <h2>{{ $movie->title }}</h2>
        <p>{{ $movie->original_title }}</p>
        <p>{{ $movie->nationality }}</p>
        <p>{{ $movie->getDataUser() }}</p>
        <p>{{ $movie->vote }}</p>
    @endforeach
@endsection
