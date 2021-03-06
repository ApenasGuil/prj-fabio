@extends('layouts.master')

@section('content')
    <form action="{{ route('genre.update', ['genre' => $genre->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Gênero:</label>
        <input type="text" name="genre" value="{{ $genre->genre }}">
        <br>
        <h2>Filmes:</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Filmes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            @forelse ($genre->movies as $movie)
                <tbody>
                    <tr>
                        <th scope="row">{{ $movie->id }}</th>
                        <td>{{ $movie->title }}</td>
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
                </tbody>
            @empty
                <tbody>
                    <tr>
                        <th scope="row" colspan="3">Nenhum gênero cadastrado.</th>
                    </tr>
                </tbody>
            @endforelse

        </table>
        <input type="submit" value="Salvar alterações desta linguage">
    </form>
@stop
