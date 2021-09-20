@extends('layouts.base')
@section('title', 'Ver Jugadores')

@section('content')
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Posición</th>
                    <th>Número</th>
                    <th>Equipo</th>
                    <th>Acción</th>
                </tr>
            </thead>

            @foreach ($jugadores as $jugador)
                <tbody>
                    <tr>
                        <td><img src="{{ asset('images/jugadores/' . $jugador->foto) }}" style="width:50px; height: 50px;"></td>
                        <td>{{ $jugador->nombre }}</td>
                        <td>{{ $jugador->posicion->nombre }}</td>
                        <td>{{ $jugador->numero }}</td>
                        <td>{{ $jugador->equipo->nombre }}</td>
                        <td>
                            <button type="button" class="btn btn-success"><a href="/jugadores/{{ $jugador->id }}">Ver</a></button>
                            <button type="button" class="btn btn-warning"><a href="/jugadores/{{ $jugador->id }}/edit">Modificar</a></button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
   </div>
@endsection