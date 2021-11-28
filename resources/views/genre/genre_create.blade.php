@extends('layouts.master')

@section('content')
    <h1>Cadastrar gênero</h1>

    <div class="row">
        <div class="col-offset-5"></div>
        <div class="col-md-2">
            <form action="{{ route('genre.store') }}" method="post">
                @csrf
                <label for="">Gênero:</label>
                <input type="text" name="genre">
                <br>
                <br>
                <input type="submit" value="Cadastrar gênero">
            </form>
        </div>
        <div class="col-offset-5"></div>
    </div>
@stop
