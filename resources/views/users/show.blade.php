<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
</head>
<body>
    
<a href="{{ route('user.index') }}">Listar</a><br>
<a href="{{ route('user.edit', ['user' => $user->id]) }}">Editar</a><br>
<a href="{{ route ('user.destroy', ['user' => $user->id]) }}">Excluir</a><br>
<h2>Visualizar Usuario</h2>

@if(session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endif

ID: {{ $user->id }}<br>
Nome: {{ $user->name }}<br>
Email: {{ $user->email }}<br>
Cadastrado: {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s') }}<br>
Editado: {{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i:s') }}<br>

</body>
</html>
