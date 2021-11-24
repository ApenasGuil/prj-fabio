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
        <table>
            <tr>
                <th>Atores</th>
                <th>Ação</th>
            </tr>
            @forelse ($movie->stars as $star)
                <tr>
                    <td>{{ $star->name }}</td>
                    <td>
                        <a href="{{ route('star.detach', ['star' => $star->id, 'movie' => $movie->id]) }}" type="button"
                            class="btn btn-secondary">Detach</a>
                    </td>
                </tr>
            @empty
                <p>Nenhum ator cadastrado.</p>
            @endforelse
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
        <input type="submit" value="Salvar alterações">
    </form>
@stop
