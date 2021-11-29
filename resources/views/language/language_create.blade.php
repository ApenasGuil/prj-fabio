@extends('layouts.master')

@section('content')
    <h1>Cadastrar língua</h1>
    <div class="row">
        <div class="col-offset-5"></div>
        <div class="col-md-2">
            <form action="{{ route('language.store') }}" method="post">
                @csrf
                <label for="">Língua:</label>
                <input type="text" name="language">
                <br>
                <br>
                <input type="submit" value="Cadastrar língua">
            </form>
        </div>
        <div class="col-offset-5"></div>
    </div>
@stop
