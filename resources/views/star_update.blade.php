@extends('layouts.master')

@section('content')
    <form action="{{ route('star.update', ['star' => $star->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome:</label>
        <input type="text" name="name" value="{{ $star->name }}">
        <br>
        <label for="">Filmes:</label>
        @forelse ( $star->movies as $movie)
            <p>{{ $movie->title }}</p>
        @empty
            <p><a href="">adicionar filme</a></p>
        @endforelse
        <br>

        <input type="submit" value="Salvar alterações">
    </form>
@stop
