@extends('layouts.base')
@section('title', 'Ver equipos')

@section('content')
   @if(session('status'))
      <div class="alert alert-success">
         {{ session('status') }}
      </div>
   @endif

   <div class="row">
      @foreach ($equipos as $equipo)
         <div class="col-xs-6 col-sm-4 col-md-3 text-center">
            <a href="/equipos/{{ $equipo->id }}">
               <img src="{{ asset('images/equipos/' . $equipo->escudo) }}" style="width: 100%">
               <h4>{{ $equipo->nombre }}</h4>
            </a>
         </div>
      @endforeach
   </div>
@endsection