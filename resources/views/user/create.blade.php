<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar usuário</title>
</head>
<body>
    <h1>
        Criar usuário
    </h1>

    <form method="POST" action="/users/store">
        @csrf
        <input type="text" name="name" placeholder="Nome">
        <br>
        <input type="text" name="email" placeholder="E-mail">
        <br>
        <input type="submit" value="Salvar">
    </form>

    <a href="/users">
        Voltar
    </a>
</body>
</html>