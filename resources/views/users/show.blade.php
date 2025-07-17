@extends('layouts.admin')

@section('content')

<a href="{{ route('user.index') }}" class="btn btn-secondary mb-3">Listar</a>
<a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-warning mb-3">Editar</a>

<form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST" class="d-inline-block mb-3" onsubmit="return confirm('Tem certeza que deseja excluir?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Apagar</button>
</form>

<h2>Visualizar Usuário</h2>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<ul class="list-group mt-3">
    <li class="list-group-item"><strong>ID:</strong> {{ $user->id }}</li>
    <li class="list-group-item"><strong>Nome:</strong> {{ $user->name }}</li>
    <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
    <li class="list-group-item"><strong>Cadastrado:</strong> {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s') }}</li>
    <li class="list-group-item"><strong>Editado:</strong> {{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i:s') }}</li>
</ul>

@endsection
