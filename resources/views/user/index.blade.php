<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        .button {
            margin: 10px;
            padding: 10px;
            border: 1px solid black;
        }

        th, td {
            margin: 10px;
            padding: 10px;
            text-align: left;
        }

        table {
            margin: 20px 10px;
        }
    </style>
</head>
<body>
    <h1
        class="text-3xl font-bold"
    >
        Users
    </h1>

    <table class="table-auto">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a 
                    class="button"
                    href="/user/{{ $user->id }}"
                >
                    detalhes
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>

    <a
        class="button"
        href="/users/create"
    >
        Incluir usuário
    </a>
</body>
</html>