@extends('layouts.master')

@section('content')
    <form action="{{ route('language.update', ['language' => $language->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Língua:</label>
        <input type="text" name="language" value="{{ $language->language }}">
        <br>
        <h2>Filmes:</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Língua</th>
                    <th scope="col">Filmes</th>
                </tr>
            </thead>
            @forelse ($language->movies as $movie)
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
                        <th scope="row" colspan="3">Nenhum filme cadastrado.</th>
                    </tr>
                </tbody>
            @endforelse

        </table>
        <input type="submit" value="Salvar alterações desta linguage">
    </form>
@stop
