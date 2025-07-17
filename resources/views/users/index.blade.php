@extends('layouts.admin')

@section('content')

<a href="{{ route('user.create') }}" class="btn btn-success mb-3">Cadastrar Usuário</a>

<h2>Listar Usuários</h2>

@if (session('success'))
  <p style="color: #086;">
    {{ session('success') }}
  </p>
@endif

<table class="table table-bordered table-striped">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($users as $user)
      <tr>
        <th>{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
          <div class="d-flex gap-2">
            <a href="{{ route('user.show', ['user' => $user->id]) }}" class="btn btn-primary btn-sm">Visualizar</a>
            <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-warning btn-sm">Editar</a>
            <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?')">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger btn-sm">Apagar</button>
            </form>
          </div>
        </td>
      </tr>
    @empty
      <tr>
        <td colspan="4">Nenhum usuário encontrado.</td>
      </tr>
    @endforelse
  </tbody>
</table>

@endsection
