@extends('layouts.base')
@section('title', 'Reset')
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

    <form method="POST" action="{{ route('password.update') }}">
        @csrf    
        <input type="hidden" name="token" value="{{ request()->route('token') }}"> 
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="password-confirm">Confirmar Password</label>
            <input type="password" name="password_confirmation" id="password-confirm" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Restablecer contraseña</button>
    </form>
@endsection