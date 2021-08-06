@extends('layouts.base')
@section('title', 'Teams')

@section('content')
   <div class="row">
      @foreach ($equipos as $key=>$equipo)
         <div class="col-3 text-center">
            <a href="/equipos/{{ $key }}">
               <img src="{{ $equipo['escudo'] }}">
               <h4>{{ $equipo['nombre'] }}</h4>
            </a>
         </div>
      @endforeach
   </div>
@endsection