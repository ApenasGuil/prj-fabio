<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stars Create</title>
</head>

<body>
    <h1>STARS CREATE</h1>
    <form action="{{ route('star.store') }}" method="post">
        @csrf
        <label for="">Nome:</label>
        <input type="text" name="name">
        <br>
        <input type="submit" value="Cadastrar ator">
    </form>
</body>

</html>
