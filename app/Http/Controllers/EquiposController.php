<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('equipos.index')->with('equipos', $this->equipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('equipos.show')->with('id', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('equipos.edit')->with('id', $id);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private $equipos = array(
        array(
            'nombre' => 'equipo 1',
            'dt' => 'D.T. 1',
            'municipio' => 'Municipio 1',
            'escudo' => 'http://ximg.es/200x300/000/fff&text=equipo1'
        ),

        array(
            'nombre' => 'equipo 2',
            'dt' => 'D.T. 2',
            'municipio' => 'Municipio 2',
            'escudo' => 'http://ximg.es/200x300/000/fff&text=equipo2'
        ),

        array(
            'nombre' => 'equipo 3',
            'dt' => 'D.T. 3',
            'municipio' => 'Municipio 3',
            'escudo' => 'http://ximg.es/200x300/000/fff&text=equipo3'
        ),
        
        array(
            'nombre' => 'equipo 4',
            'dt' => 'D.T. 4',
            'municipio' => 'Municipio 4',
            'escudo' => 'http://ximg.es/200x300/000/fff&text=equipo4'
        )
    );
}
