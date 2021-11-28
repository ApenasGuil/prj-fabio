@extends('layouts.master')

@section('content')
    <form action="{{ route('movie.update', ['movie' => $movie->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome:</label>
        <input type="text" name="title" value="{{ $movie->title }}">
        <br>
        <label for="">Descrição:</label>
        <textarea id="storyline" name="storyline" rows="2" cols="50">{{ $movie->storyline }}</textarea>
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            @if ($movie->stars->count())
                @forelse ($movie->stars as $star)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $star->id }}</th>
                            <td>{{ $star->name }}</td>
                            <td><a href="{{ route('star.detach', ['star' => $star->id, 'movie' => $movie->id]) }}"
                                    type="button" class="btn btn-danger">Remover</a></td>
                        </tr>
                    </tbody>
                @empty
                @endforelse
            @else
                <tbody>
                    <tr>
                        <th scope="row" colspan="3">Nenhum ator cadastrado.</th>
                    </tr>
                </tbody>
            @endif
        </table>

        <label for="stars">Adicionar ator:</label>
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
        </datalist>
        <input type="submit" value="Salvar alterações deste filme">
    </form>
@stop
