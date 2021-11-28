@extends('layouts.master')

@section('content')
    <table>
        <tr>
            <td>#ID</td>
            <td>Língua</td>
            <td>Filmes</td>
        </tr>

        @forelse ($langs as $lang)
            <tr>
                <td>{{ $lang->id }}</td>
                <td>{{ $lang->language }}</td>
                <td>
                    @forelse ($lang->movies as $movie)
                        <li>
                            {{ $movie->title }}
                        </li>
                    @empty
                        Nenhum filme cadastrado.
                    @endforelse
                </td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('language.show', ['language' => $lang->id]) }}" type="button"
                            class="btn btn-secondary">Informações</a>
                        <a href="{{ route('language.edit', ['language' => $lang->id]) }}" type="button"
                            class="btn btn-secondary">Alterar</a>
                        <form action="{{ route('language.destroy', ['language' => $lang->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <input class="btn btn-secondary" type="submit" value="Deletar">
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <p>Nenhuma linguagem cadastrada.</p>
        @endforelse
    </table>
@stop
