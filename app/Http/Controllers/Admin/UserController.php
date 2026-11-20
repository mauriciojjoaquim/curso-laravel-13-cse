<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatedUserRequest;
use App\Http\Requests\UpdatedUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);

        return view('admin.users.index', compact('users'));
    }

    public function add()
    {
        return view('admin.users.add');
    }

    public function edit(string $id)
    {
        $user = User::findOrFail($id);

        if(!$user) {
            return redirect()->route('users.index')->with('message', 'Usuario nãp encontrado');
        }

        return view('admin.users.edit', compact('user'));
    }

    public function show(string $id)
    {
        $user = User::findOrFail($id);

        if(!$user) {
            return redirect()->route('users.index')->with('message', 'Usuario nãp encontrado');
        }

        return view('admin.users.show', compact('user'));
    }
    
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        if(!$user) {
            return redirect()->route('users.index')->with('message', 'Usuario nãp encontrado');
        }
        if(Auth::user()->id == $user->id) {
            return redirect()->route('users.index')->with('message', 'Usuario não permitido excluir.');
        }
        
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuário excluido com sucesso.');
    }
    
    public function created(CreatedUserRequest $request)
    {


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('users.index')->with('success', 'Usuário criado com sucesso.');

    }

    public function update(UpdatedUserRequest $request, string $id)
    {

        $user = User::find($id);

        if(!$user) {
            return redirect()->route('users.index')->with('message', 'Usuario nãp encontrado');
        }

        if($request->password != null) {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
        } else {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        return redirect()->route('users.index')->with('success', 'Usuário atualizado com sucesso.');
    }
    
    
}