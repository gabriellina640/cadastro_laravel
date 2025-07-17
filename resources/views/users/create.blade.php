@extends('layouts.admin')

@section('content')

<a href="{{ route('user.index') }}" class="btn btn-secondary mb-3">Listar Usuários</a>

<h2>Cadastrar Usuário</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('user.store') }}" method="POST" class="mt-3">
    @csrf

    <div class="mb-3">
        <label for="idname" class="form-label">Nome:</label>
        <input type="text" name="name" id="idname" class="form-control" placeholder="Nome completo" value="{{ old('name') }}">
    </div>

    <div class="mb-3">
        <label for="idemail" class="form-label">Email:</label>
        <input type="email" name="email" id="idemail" class="form-control" placeholder="Email" value="{{ old('email') }}">
    </div>

    <div class="mb-3">
        <label for="idpassword" class="form-label">Senha:</label>
        <input type="password" name="password" id="idpassword" class="form-control" placeholder="Senha com no mínimo 6 caracteres">
    </div>

    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>

@endsection
