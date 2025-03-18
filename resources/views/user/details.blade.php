<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do usuário</title>
</head>
<body>
    <h1>
        Detalhes do usuário
    </h1>
    <p>
        Nome: {{ $user->name }}
    </p>
    <p>
        E-mail: {{ $user->email }}
    </p>
    <a href="/users">
        Voltar
    </a>
</body>
</html>