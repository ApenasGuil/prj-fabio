@extends('layouts.master')

@section('content')
    <table>
        <tr>
            <td>#ID</td>
            <td>Título</td>
            <td>Descrição</td>
        </tr>
        @forelse ($directors as $director)
            <tr>
                <td>{{ $director->id }}</td>
                <td>{{ $director->name }}</td>
                <td>
                    @forelse ($director->movies as $movie)
                        <li>
                            {{ $movie->title }}
                        </li>
                    @empty
                        Nenhum filme cadastrado.
                    @endforelse
                </td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('director.show', ['director' => $director->id]) }}" type="button"
                            class="btn btn-secondary">Informações</a>
                        <a href="{{ route('director.edit', ['director' => $director->id]) }}" type="button"
                            class="btn btn-secondary">Alterar</a>
                        <form action="{{ route('director.destroy', ['director' => $director->id]) }}" method="post">
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
