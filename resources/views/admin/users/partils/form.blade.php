<x-alert/>
@csrf
<br>
<div class="form-group mb-3">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name ?? old('name') }}">
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email ?? old('email') }}">
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="password">Senha</label>
    <input type="password" name="password" id="password" class="form-control">
    @error('password')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<a href="{{ route('users.index') }}">Voltar</a>