@extends('layouts.base')
@section('title', 'New player')

@section('content')
    <form action="/jugadores" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Name</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}">
            @error('nombre')
                <small>{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="posicion">Position</label>
            <select class="form-control" id="posicion" name="posicion">
                @foreach ($jugadoresPos as $jugadorPos)
                    <option value="{{ $jugadorPos->id }}">{{ $jugadorPos->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="dt">Number</label>
            <input type="number" name="numero" id="numero" class="form-control" value="{{ old('numero') }}">
            @error('numero')
                <small>{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="team">Team</label>
            <select class="form-control" id="equipo" name="equipo">
                @foreach ($jugadoresEquip as $jugadorEquip)
                    <option value="{{ $jugadorEquip->id }}">{{ $jugadorEquip->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="foto">Photo</label>
            <br>
            <input type="file" name="foto" id="foto" class="form-control-file">
            @error('foto')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <br>
        
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection