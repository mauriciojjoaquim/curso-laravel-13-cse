@extends('admin.layouts.layout-app')

@section('title', 'Lista dos Usuário')


@section('content')
                <div class="text-blue-500">
                    <p class="text-center mt-4 mb-4 fs-1 text-blue-500">Lista dos Usuário</p>
                <hr class="border border-blue-100 border-3 opacity-50">
                </div>


                <x-alert/>

                @if ($users->count() != 0)
                    <a href="{{  route('user.add') }}" class="btn btn-blue-200 border border-blue-400 text-black-700 px-4">Novo usuário</a>
                @endif
                
                <table class="table table-dark table-striped table-hover">
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
                                    <a class="btn btn-yellow-200 border border-yellow-400 text-black-700 px-4" href="{{ route('user.edit', ['user' => $user->id]) }}">Editar</a>
                                    <a class="btn btn-green-200 border border-green-400 text-black-700 px-4" href="{{ route('user.show', ['user' => $user->id]) }}">Detalhes</a>
                                </td>
                            </tr>
                        @empty
                            
                        <tr>
                            <td colspan="3">Nenhum usuário encontrado.</td>
                            <td colspan="3"><a class="btn btn-yellow-200 border border-blue-400 text-black-700 px-4" href="{{  route('user.add') }}">Novo usuário</a></td>
                        </tr>
                                
                        @endforelse
                    </tbody>
                </table>
                {{ $users->links() }} 

                
        @endsection