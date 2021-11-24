<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies Create</title>
</head>

<body>
    <h1>MOVIES CREATE</h1>
    <form action="{{ route('movie.store') }}" method="post">
        @csrf
        <label for="">Título:</label>
        <input type="text" name="title">
        <br>
        <label for="">Sinopse:</label>
        <input type="text" name="storyline">
        <br>
        <input type="submit" value="Cadastrar filme">
    </form>
</body>

</html>
