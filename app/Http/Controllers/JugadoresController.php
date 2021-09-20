<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posicion;
use App\Models\Equipo;
use App\Models\Jugador;
use App\Http\Requests\StoreJugadoresRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = Jugador::all();
        return view('jugadores.index')
                ->with('jugadores', $jugadores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->rol == 2) {
            return redirect()->route('jugadores.index');
        }
        
        $jugadoresPosicion = Posicion::all();
        $jugadoresEquipo = Equipo::all();
        
        return view('jugadores.create')
                ->with('jugadoresPos', $jugadoresPosicion)
                ->with('jugadoresEquip', $jugadoresEquipo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJugadoresRequest $request)
    {
        if($request -> hasFile('foto')) {
            $file = $request -> file('foto');
            $foto = time() . $file -> getClientOriginalName();
            $file -> move("images/jugadores", $foto);
        }

        $jugador = new Jugador();
        $jugador -> nombre = $request -> nombre;
        $jugador -> posicion_id = $request -> posicion;
        $jugador -> numero = $request -> numero;
        $jugador -> equipo_id = $request -> equipo;
        $jugador -> foto = $foto;
        $jugador -> save();
        return redirect()->route('jugadores.index')->with('status', 'Jugador creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jugador = Jugador::find($id);
        return view('jugadores.show')
                ->with('jugador', $jugador);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->rol == 2) {
            return redirect()->route('jugadores.index');
        }

        $jugador = Jugador::find($id);
        $posicionJugadores = Posicion::all();
        $equipoJugadores = Equipo::all();
        return view('jugadores.edit')
                ->with('jugador', $jugador)
                ->with('equipoJugadores', $equipoJugadores)
                ->with('posicionJugadores', $posicionJugadores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jugador = Jugador::find($id);
        $jugador -> nombre = $request -> nombre;
        $jugador -> posicion_id = $request -> posicion;
        $jugador -> numero = $request -> numero;
        $jugador -> equipo_id = $request -> equipo;

        if($request -> hasFile('foto')) {
            $file = $request -> file('foto');
            $foto = $jugador->foto;
            $file -> move("images/jugadores", $foto);
        }

        $jugador->save();
        return redirect()->route('jugadores.index')->with('status', 'Jugador actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jugador = Jugador::find($id);
        $jugador->delete();
        File::delete("images/jugadores/".$jugador->foto);
        return redirect()->route('jugadores.index')
                                ->with('status', 'Jugador eliminado');
    }
    /*
    private $jugadores = array(
        array(
            'foto' => 'https://image.flaticon.com/icons/png/512/2922/2922510.png',
            'nombre' => 'Hansel Grett',
            'posicion' => 'Delantero',
            'numero' => 6,
            'equipo' => 'Colombia'
        ),

        array(
            'foto' => 'https://image.flaticon.com/icons/png/512/2922/2922510.png',
            'nombre' => 'James Rodriguez',
            'posicion' => 'Volante',
            'numero' => 3,
            'equipo' => 'Colombia'
        ),

        array(
            'foto' => 'https://image.flaticon.com/icons/png/512/2922/2922510.png',
            'nombre' => 'Xing Jin Ping',
            'posicion' => 'Defensa',
            'numero' => 5,
            'equipo' => 'Colombia'
        ),

        array(
            'foto' => 'https://image.flaticon.com/icons/png/512/2922/2922510.png',
            'nombre' => 'David Ospina',
            'posicion' => 'Portero',
            'numero' => 10,
            'equipo' => 'Colombia'
        )
    );*/
}