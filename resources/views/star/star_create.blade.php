@extends('layouts.master')

@section('content')
    <h1>Cadastrar ator</h1>

    <div class="row">
        <div class="col-offset-5"></div>
        <div class="col-md-2">
            <form action="{{ route('star.store') }}" method="post">
                @csrf
                <label for="">Nome:</label>
                <input type="text" name="name">
                <br>
                <br>
                <input type="submit" value="Cadastrar ator">
            </form>
        </div>
        <div class="col-offset-5"></div>
    </div>
@stop
