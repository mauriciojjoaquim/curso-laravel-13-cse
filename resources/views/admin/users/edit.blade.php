@extends('admin.layouts.layout-app')
@section('title', 'Editar Usuário')

@section('content')
  
            <h1>Editar o Usuário {{ $user->name }}</h1>

       
            <form action="{{ route('user.update', $user->id) }}" method="post">
                
                @method('put')
                <br>

                 @include('admin.users.partils.form')
                
                <button type="submit" >Alterar</button>
            </form>

  @endsection
