<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

<a href="{{ route('user.index')}}">Listar</a><br>
<h2>Cadastrar Usuário </h2>

@if ($errors->any()){
    <p style="color: #f00;">
        @foreach ($errors->all() as $error)
        {{ $error }}
        @endforeach
    </p>
}
@endif


<form action="{{ route('user.store')}}" method="POST">
@csrf
@method('POST')

<label for="nome">Nome: </label>
<input type="text" name="nome" id="idnome" placeholder="Nome completo"><br><br>

<label for="email">Email: </label>
<input type="email" name="email" id="idemail" placeholder="Email"><br><br>

<label for="nome">Senha: </label>
<input type="password" name="senha" id="idsenha "placeholder="Senha com no minimo 6 caracteres"><br><br>

<button type="submit">Cadastrar</button>


</form>

</body>
</html>