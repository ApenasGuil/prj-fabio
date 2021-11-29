@extends('layouts.master')

@section('content')
    <form action="{{ route('country.update', ['country' => $country->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">País:</label>
        <input type="text" name="country" value="{{ $country->country }}">
        <br>
        <h2>Filmes:</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">País</th>
                    <th scope="col">Filmes</th>
                </tr>
            </thead>
            @forelse ($country->movies as $movie)
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
