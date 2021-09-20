<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJugadoresRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'posicion' => 'required',
            'numero' => 'required',
            'equipo' => 'required',
            'foto' => 'required|image'
        ];
    }

    public function messages() {
        return[
            'nombre.required' => 'El nombre es obligtorio',
            'posicion.required' => 'La posición es obligtoria',
            'numero.required' => 'El número del jugador es obligtorio',
            'equipo.required' => 'El equipo es obligatorio',
            'foto.required' => 'La foto debe ser una imagen'
        ];
    }
}
