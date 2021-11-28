@extends('layouts.master')

@section('content')
    <table>
        <tr>
            <td>#ID</td>
            <td>Gênero</td>
            <td>Filmes</td>
        </tr>

        @forelse ($genres as $genre)
            <tr>
                <td>{{ $genre->id }}</td>
                <td>{{ $genre->genre }}</td>
                <td>
                    @forelse ($genre->movies as $movie)
                        <li>
                            {{ $movie->title }}
                        </li>
                    @empty
                        Nenhum filme cadastrado.
                    @endforelse
                </td>
                <td>
                    {{-- <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('movie.show', ['movie' => $movie->id]) }}" type="button"
                            class="btn btn-secondary">Informações</a>
                        <a href="{{ route('movie.edit', ['movie' => $movie->id]) }}" type="button"
                            class="btn btn-secondary">Alterar</a>
                        <form action="{{ route('movie.destroy', ['movie' => $movie->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <input class="btn btn-secondary" type="submit" value="Deletar">
                        </form>
                    </div> --}}
                </td>
            </tr>
        @empty
            <p>Nenhum gênero cadastrado.</p>
        @endforelse
    </table>
@stop
