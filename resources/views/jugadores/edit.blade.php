@extends('layouts.base')
@section('title', 'Modify a player')

@section('content')
    <form action="/jugadores/{{ $jugador->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $jugador->nombre }}">
        </div>

        <div class="form-group">
            <label for="posicion">Posicion</label>
            <select class="form-control" id="posicion" name="posicion">
                @foreach ($posicionJugadores as $jugadorPos)
                    <option value="{{ $jugadorPos->id }}" @if($jugadorPos->id == $jugador->posicion_id) selected @endif>{{ $jugadorPos->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="dt">Numero</label>
            <input type="number" name="numero" id="numero" class="form-control" value="{{ $jugador->numero }}">
        </div>

        <div class="form-group">
            <label for="team">Equipo</label>
            <select class="form-control" id="equipo" name="equipo">
                @foreach ($equipoJugadores as $equipoJugador)
                    <option value="{{ $equipoJugador->id }}" @if($equipoJugador->id == $jugador->equipo_id) selected @endif>{{ $equipoJugador->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="foto">Photo</label>
            <br>
            <input type="file" name="foto" id="foto" class="form-control-file">
        </div>
        <br>
        
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection