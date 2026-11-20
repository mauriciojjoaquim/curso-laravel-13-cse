@extends('admin.layouts.layout-app')
@section('title', 'Editar Usuário')

@section('content')
   

                <div class="text-blue-500">
                    <p class="text-center mt-4 mb-4 fs-1 text-blue-500">Novo Usuário</p>
                    <hr class="border border-blue-100 border-3 opacity-50">
                </div>


            
            
            <form action="{{ route('user.created') }}" method="post">

                
                

                @include('admin.users.partials.form')
                
                <button type="submit" >Enviar</button>
            </form>


            
     
  @endsection
    