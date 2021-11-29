@extends('layouts.master')

@section('content')
    <h1>Cadastrar país</h1>
    <div class="row">
        <div class="col-offset-5"></div>
        <div class="col-md-2">
            <form action="{{ route('country.store') }}" method="post">
                @csrf
                <label for="">País:</label>
                <input type="text" name="country">
                <br>
                <br>
                <input type="submit" value="Cadastrar pais ">
            </form>
        </div>
        <div class="col-offset-5"></div>
    </div>
@stop
