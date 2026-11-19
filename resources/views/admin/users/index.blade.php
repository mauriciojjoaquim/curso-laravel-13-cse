@extends('admin.layouts.layout-app')

@section('title', 'Lista dos Usuarios')


@section('content')
                <h1>Lista de Usuarios</h1>

                <x-alert/>

                @if ($users->count() != 0)
                    <a href="{{  route('user.add') }}">Novo usuário</a>
                @endif
                
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('user.edit', ['user' => $user->id]) }}">Editar</a>
                                </td>
                            </tr>
                        @empty
                            
                        <tr>
                            <td colspan="3">Nenhum usuário encontrado.</td>
                            <td colspan="3"><a href="{{  route('user.add') }}">Novo usuário</a></td>
                        </tr>
                                
                        @endforelse
                    </tbody>
                </table>
                {{ $users->links() }} 

                
        @endsection