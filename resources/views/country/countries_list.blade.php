@extends('layouts.master')

@section('content')
    <table>
        <tr>
            <td>#ID</td>
            <td>Países</td>
            <td>Filmes</td>
        </tr>

        @forelse ($countries as $country)
            <tr>
                <td>{{ $country->id }}</td>
                <td>{{ $country->country }}</td>
                <td>
                    @forelse ($country->movies as $movie)
                        <li>
                            {{ $movie->title }}
                        </li>
                    @empty
                        Nenhum filme cadastrado.
                    @endforelse
                </td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('country.show', ['country' => $country->id]) }}" type="button"
                            class="btn btn-secondary">Informações</a>
                        <a href="{{ route('country.edit', ['country' => $country->id]) }}" type="button"
                            class="btn btn-secondary">Alterar</a>
                        <form action="{{ route('country.destroy', ['country' => $country->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <input class="btn btn-secondary" type="submit" value="Deletar">
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td>
                    Nenhum país cadastrado.
                </td>
            </tr>
        @endforelse
    </table>
@stop
