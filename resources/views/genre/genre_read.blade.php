@extends('layouts.master')

@section('content')
    <h2>#{{ $genre->id }} - {{ $genre->genre }}</h2>
    <table>
        <tr>
            <th>Filmes</th>
        </tr>
        @forelse ( $genre->movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
            </tr>
        @empty
            <p>Nenhum filme cadastrado.</p>
        @endforelse
    </table>
    <a href="{{ route('genre.edit', ['genre' => $genre->id]) }}">Editar gênero</a>
@stop
