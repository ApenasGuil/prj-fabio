@extends('layouts.master')

@section('content')
    <form action="{{ route('movie.update', ['movie' => $movie->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Nome:</label>
        <input type="text" name="title" value="{{ $movie->title }}">
        <br>
        <label for="storyline">Descrição:</label>
        <textarea id="storyline" name="storyline" rows="2" cols="50">{{ $movie->storyline }}</textarea>
        <br>
        <label for="director">Diretor:</label>
        <input list="director" name="director" id="director"
            value="{{ $movie->director === null ? 'Não cadastrado' : $movie->director }}">
        <datalist id="director">
            @forelse ($directors as $director)
                <tr>
                    <td>
                        <option value="#{{ $director->id }} {{ $director->name }}">
                    </td>
                </tr>
            @empty
                <p>Error</p>
            @endforelse
        </datalist>
        <br>
        <label for="language">Linguagem:</label>
        <input list="language" name="language" id="language"
            value="{{ $movie->language === null ? 'Não cadastrada' : $movie->language }}">
        <datalist id="language">
            @forelse ($languages as $language)
                <tr>
                    <td>
                        <option value="#{{ $language->id }} {{ $language->language }}">
                    </td>
                </tr>
            @empty
                <p>Error</p>
            @endforelse
        </datalist>
        <br>
        <label for="genre">Gênero:</label>
        <input list="genre" name="genre" id="genre"
            value="{{ $movie->genre === null ? 'Não cadastrado' : $movie->genre }}">
        <datalist id="language">
            @forelse ($genres as $genre)
                <tr>
                    <td>
                        <option value="#{{ $genre->id }} {{ $genre->genre }}">
                    </td>
                </tr>
            @empty
                <p>Error</p>
            @endforelse
        </datalist>
        <br>
        <label for="countries">País:</label>
        <input list="countries" name="country" id="country"
            value="{{ $movie->country === null ? 'Não cadastrado' : $movie->country->country }}">

        <datalist id="countries">
            @forelse ($countries as $country)
                <tr>
                    <td>
                        <option value="{{ $country->country }}">
                    </td>
                </tr>
            @empty
                <p>Error</p>
            @endforelse
        </datalist>
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

        @if ($stars >= null)
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
        @else

        @endif
        <input type="submit" value="Salvar alterações deste filme">
    </form>
@stop
