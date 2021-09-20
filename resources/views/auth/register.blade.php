@extends('layouts.base')
@section('title', 'Registro')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="username">Userame</label>
            <input type="text" name="username" class="form-control" id="username" required>
        </div>

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>

        <div class="form-group">
            <label for="rol">Rol</label>
            <select class="form-control" id="rol" name="rol">
                <option value="1">Administrador</option>
                <option value="2">Usuario</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection