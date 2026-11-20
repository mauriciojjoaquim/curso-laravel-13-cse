@extends('admin.layouts.layout-app')
@section('title', 'Editar Usuário')

@section('content')

                <div class="text-blue-500">
                    <p class="text-center mt-4 mb-4 fs-1 text-blue-500">Editar o Usuário {{ $user->name }}</p>
                    <hr class="border border-blue-100 border-3 opacity-50">
                </div>
  

       
            <form action="{{ route('user.update', $user->id) }}" method="post">
                
                @method('put')
                <br>

                 @include('admin.users.partials.form')
                
                <button type="submit" >Alterar</button>
            </form>

  @endsection
