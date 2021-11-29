@extends('layouts.master')

@section('content')
    <h2>#{{ $language->id }} - {{ $language->language }}</h2>
    <table>
        <tr>
            <th>Filmes</th>
        </tr>
        @forelse ( $language->movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
            </tr>
        @empty
            <p>Nenhum filme cadastrado.</p>
        @endforelse
    </table>
    <a href="{{ route('language.edit', ['language' => $language->id]) }}">Editar linguagem</a>
@stop
