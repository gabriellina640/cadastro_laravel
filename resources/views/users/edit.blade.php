<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    

<a href="{{ route('user.index') }}">Listar</a><br>
<a href="{{ route('user.show', ['user' => $user->id]) }}">Visualizar</a><br>
<h2>Editar Usuario</h2>

@if ($errors->any()){
    <p style="color: #f00;">
        @foreach ($errors->all() as $error)
        {{ $error }}
        @endforeach
    </p>
}
@endif


<form action="{{ route('user.update', $user->id) }}" method="POST">
@csrf
@method('PUT')

<label for="name">Nome: </label>
<input type="text" name="name" id="idname" placeholder="Nome completo" value="{{ old('name', $user->name) }}"><br><br>

<label for="email">Email: </label>
<input type="email" name="email" id="idemail" placeholder="Email" value="{{ old('email', $user->email) }}" ><br><br>

<label for="password">Senha: </label>
<input type="password" name="password" id="idpassword "placeholder="Senha com no minimo 6 caracteres" value="{{ old('password') }}"><br><br>

<button type="submit">Salvar</button>


</form>



</body>
</html>