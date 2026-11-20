@extends('admin.layouts.layout-app')

@section('title', 'Detalhe do Usuário')


@section('content')



<div class="text-blue-500">
    <h1 class=" text-center mt-4 mb-4 text-blue-500">Detalhe do Usuário {{ $user->name }}</h1>
  <hr class="border border-blue-100 border-3 opacity-50">
</div>
<div class="">
    <ul class="text-center">
        <li class="">Nome: {{ $user->name }}</li>
        <li class="">E-mail: {{ $user->email }}</li>
        <li class="">Data do cadastro: {{ $user->created_at }}</li>
    </ul>
</div>

<div class="text-center mt-4">
    <a class="bg-yellow-200 border border-yellow-400 text-black-700 px-4 mt-4" href="{{ route('users.index') }}">Voltar</a>
    <a class="bg-blue-200 border border-blue-400 text-black-700 px-4 mt-4" href="{{ route('user.add') }}">Novo Usuário</a>
    <a class="bg-yellow-200 border border-yellow-400 text-black-700 px-4 mt-4" href="{{ route('user.edit', $user->id) }}">Editar</a>
    <form action="{{ route('user.destroy', $user->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="bg-red-200 border border-red-400 text-black-700 px-4 mt-4">Excluir</button>
    </form>
    
</div>
      

@endsection