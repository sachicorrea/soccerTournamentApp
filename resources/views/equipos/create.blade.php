@extends('layouts.base')
@section('title', 'Create a team')

@section('content')
    <form action="/equipos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Name</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}">
            @error('nombre')
                <small>{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="dt">Manager</label>
            <input type="text" name="dt" id="dt" class="form-control" value="{{ old('dt') }}">
            @error('dt')
                <small>{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="municipio">City</label>
            <select class="form-control" id="municipio" name="municipio">
                @foreach($municipios as $municipio)
                    <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
                @endforeach
            </select>
            @error('municipio')
                <small>{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="escudo">Emblem</label>
            <br>
            <input type="file" name="escudo" id="escudo" class="form-control-file">
            @error('escudo')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <br>
        
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection