@extends('layouts.master')

@section('content')
    <h2>#{{ $star->id }} - {{ $star->name }}</h2>
    <table>
        <tr>
            <th>Filmes</th>
        </tr>
        @forelse ( $star->movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
            </tr>
        @empty
            <p>Nenhum filme cadastrado.</p>
        @endforelse
    </table>
    <a href="{{ route('star.edit', ['star' => $star->id]) }}">Editar ator</a>
@stop
