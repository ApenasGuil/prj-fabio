@extends('layouts.master')

@section('content')
    <form action="{{ route('star.update', ['star' => $star->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome:</label>
        <input type="text" name="title" value="{{ $star->name }}">
        <br>
        <h2>FILMES:</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            @forelse ($star->movies as $movie)
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

        {{-- <label for="stars">Adicionar ator:</label>
        <input list="stars" name="star" id="star">

        <datalist id="stars">
            @forelse ($stars as $star)
                <tr>
                    <td>
                        <option value="{{ $star->name }}">
                    </td>
                </tr>
            @empty
                <p>Error</p>
            @endforelse
        </datalist> --}}
        <input type="submit" value="Salvar alterações deste filme">
    </form>
@stop
