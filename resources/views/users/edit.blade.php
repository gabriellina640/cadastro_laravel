@extends('layouts.admin')

@section('content')

<a href="{{ route('user.index') }}" class="btn btn-secondary mb-3">Listar Usuários</a>
<a href="{{ route('user.show', ['user' => $user->id]) }}" class="btn btn-info mb-3">Visualizar</a>

<h2>Editar Usuário</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('user.update', $user->id) }}" method="POST" class="mt-3">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="idname" class="form-label">Nome:</label>
        <input type="text" name="name" id="idname" class="form-control" placeholder="Nome completo" value="{{ old('name', $user->name) }}">
    </div>

    <div class="mb-3">
        <label for="idemail" class="form-label">Email:</label>
        <input type="email" name="email" id="idemail" class="form-control" placeholder="Email" value="{{ old('email', $user->email) }}">
    </div>

    <div class="mb-3">
        <label for="idpassword" class="form-label">Senha:</label>
        <input type="password" name="password" id="idpassword" class="form-control" placeholder="Nova senha (opcional)">
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

@endsection
