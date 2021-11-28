@extends('layouts.master')

@section('content')
    <table>
        <tr>
            <td>#ID</td>
            <td>Título</td>
            <td>Descrição</td>
            <td>Atores</td>
        </tr>

        @forelse ($movies as $movie)
            <tr>
                <td>{{ $movie->id }}</td>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->storyline }}</td>
                <td>
                    @forelse ($movie->stars as $star)
                        <li>
                            {{ $star->name }}
                        </li>
                    @empty
                        Nenhum ator cadastrado.
                    @endforelse
                </td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('movie.show', ['movie' => $movie->id]) }}" type="button"
                            class="btn btn-secondary">Informações</a>
                        <a href="{{ route('movie.edit', ['movie' => $movie->id]) }}" type="button"
                            class="btn btn-secondary">Alterar</a>
                        <form action="{{ route('movie.destroy', ['movie' => $movie->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <input class="btn btn-secondary" type="submit" value="Deletar">
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <p>Nenhum filme cadastrado.</p>
        @endforelse
    </table>
@stop
