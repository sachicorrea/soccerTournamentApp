@extends('layouts.base')
@section('title', 'Detalles Jugadores')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <img src="{{ asset('images/jugadores/' . $jugador->foto) }}" style="height: 150px; width: 150px;">
        </div>

        <div class="col-sm-8">
            <p class="h3">{{ $jugador->nombre }}</p>
            <p class="h5">{{ $jugador->posicion->nombre }}</p>
            <p class="h5">{{ $jugador->numero }}</p>
            <p class="h5">{{ $jugador->equipo->nombre }}</p>

            @if(Auth::user()->rol == 1)
                <form class="delete d-inline" action="/jugadores/{{ $jugador->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                <a href="/jugadores/{{ $jugador->id }}/edit" class="btn btn-warning">Modificar</a>
            @endif
            <a href="/jugadores" class="btn btn-outline-dark">Ver Jugadores</a>
        </div>
    </div>
@endsection