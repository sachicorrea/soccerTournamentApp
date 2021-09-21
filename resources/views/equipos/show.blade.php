@extends('layouts.base')
@section('title', 'Detalles equipo')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <img src="{{ asset('images/equipos' . $equipo->escudo) }}">
        </div>

        <div class="col-sm-8">
            <p class="h3">{{ $equipo->nombre }}</p>
            <p class="h5">{{ $equipo->dt }}</p>
            <p class="h5">{{ $equipo->municipio->nombre }}</p>
            @if(Auth::user()->rol == 1)
                <form class="delete d-inline" action="/equipos/{{ $equipo->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Eliminar</button>

                </form>
                <a href="/equipos/{{ $equipo->id }}/edit" class="btn btn-warning">Modificar</a>
            @endif
            <a href="/equipos" class="btn btn-outline-dark">Ver equipos</a>
        </div>
    </div>
@endsection