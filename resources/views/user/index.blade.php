<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Users</h1>

    @foreach ($users as $user)
        <p>
            <a href="/user/{{ $user->id }}">
                {{ $user->name }} ({{ $user->email }})
            </a>
        </p>
    @endforeach
    <a href="/users/create">Incluir usuário</a>
</body>
</html>