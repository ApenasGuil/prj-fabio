@extends('layouts.master')

@section('content')
    <table>
        <tr>
            <td>#ID</td>
            <td>Nome</td>
            <td>Filmes</td>
        </tr>

        @forelse ($stars as $star)
            <tr>
                <td>{{ $star->id }}</td>
                <td>{{ $star->name }}</td>
                <td>
                    @forelse ($star->movies as $movie)
                        <li>
                            {{ $movie->title }}
                        </li>
                    @empty
                        Nenhum filme cadastrado.
                    @endforelse
                </td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('star.show', ['star' => $star->id]) }}" type="button"
                            class="btn btn-secondary">Informações</a>
                        <a href="{{ route('star.edit', ['star' => $star->id]) }}" type="button"
                            class="btn btn-secondary">Alterar</a>
                        <form action="{{ route('star.destroy', ['star' => $star->id]) }}" method="post">
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
                    Nenhum ator cadastrado.
                </td>
            </tr>
        @endforelse
    </table>
@stop
