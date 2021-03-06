@extends('layouts.master')

@section('content')
    <h2>#{{ $country->id }} - {{ $country->country }}</h2>
    <table>
        <tr>
            <th>Filmes</th>
        </tr>
        @forelse ( $country->movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
            </tr>
        @empty
            <p>Nenhum filme cadastrado.</p>
        @endforelse
    </table>
    <a href="{{ route('country.edit', ['country' => $country->id]) }}">Editar país</a>
@stop
