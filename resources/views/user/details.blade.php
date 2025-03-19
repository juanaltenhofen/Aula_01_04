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
    <form action="/user/{{ $user->id }}" method="POST">
        @method('PUT')
        @csrf
        <p>
            Nome: 
            <input
                type="text"
                name="name"
                value="{{ $user->name }}"
            >
        </p>
        <p>
            E-mail:
            <input
                type="text"
                name="email"
                value="{{ $user->email }}"
            >
        </p>
        <input type="submit" value="Salvar">
    </form>

    <form action="/user/{{ $user->id }}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="Excluir">
    </form>
    <a href="/users">
        Voltar
    </a>
</body>
</html>