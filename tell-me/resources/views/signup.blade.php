<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Cadastre-se</title>
</head>
<body>
    <form action="{{ route('register') }}" method="POST">

        <div>
            <label for="name">Nome: </label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
        </div>


        <div>
            <button type="submit">Cadastrar</button>
        </div>

    </form>
</body>
</html>
