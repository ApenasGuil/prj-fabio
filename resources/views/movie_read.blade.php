@extends('layouts.master')

@section('content')
    <h2>#{{ $movie->id }} - {{ $movie->title }}</h2>
    <h4>Título: {{ $movie->title }}</h4>
    <p>Descrição: {{ $movie->storyline }}</p>

    <a href="{{ route('movie.edit', ['movie' => $movie->id]) }}">Editar filme</a>
@stop
