@extends('layouts.master')

@section('content')
    <h1>Cadastrar filme</h1>
    <div class="row">
        <div class="col-offset-5"></div>
        <div class="col-md-2">
            <form action="{{ route('movie.store') }}" method="post">
                @csrf
                <label for="">Título:</label>
                <input type="text" name="title">
                <br>
                <label for="">Sinopse:</label>
                <input type="text" name="storyline">
                <br>
                <br>
                <input type="submit" value="Cadastrar filme">
            </form>
        </div>
        <div class="col-offset-5"></div>
    </div>
@stop
