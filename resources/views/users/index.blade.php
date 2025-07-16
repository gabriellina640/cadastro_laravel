<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
</head>
<body>
    
<a href="{{ route('user.create') }}">Cadastrar Usuário</a><br>
<h2>Listar Usuários</h2>

@if (session('success'))
  <p style="color: #086;">
    
  {{session('success')}}

  </p>

@endif

@forelse ($users as $user)

 ID: {{ $user->id }}<br>
 Nome: {{ $user->name }}<br>
 Email: {{ $user->email }}<br>
 <a href="{{ route ('user.show', ['user' => $user->id]) }}">Visualizar</a><br>
 <a href="{{ route ('user.edit', ['user' => $user->id]) }}">Editar</a><br>
 <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST">
@csrf
@method('delete')
<button type="submit">Apagar</button>
 </form>
 <hr>

 @empty
 @endforelse

</body>
</html>