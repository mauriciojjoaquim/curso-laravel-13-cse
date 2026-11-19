@extends('admin.layouts.layout-app')
@section('title', 'Editar Usuário')

@section('content')
   

            <h1>Novo Usuário</h1>

            
            
            <form action="{{ route('user.created') }}" method="post">

                
                

                @include('admin.users.partils.form')
                
                <button type="submit" >Enviar</button>
            </form>


            
     
  @endsection
    