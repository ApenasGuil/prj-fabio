@extends('layouts.master')

@section('content')
    <form action="{{ route('movie.update', ['movie' => $movie->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome:</label>
        <input type="text" name="title" value="{{ $movie->title }}">
        <br>
        <label for="">Descrição:</label>
        <input type="text" name="storyline" value="{{ $movie->storyline }}">
        <br>

        <input type="submit" value="Salvar alterações">
    </form>
@stop
