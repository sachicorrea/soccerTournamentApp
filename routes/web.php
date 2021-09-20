<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\PositionsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [InicioController::class, 'index']);
Route::resources([
    'equipos' => EquiposController::class,
    'jugadores' => JugadoresController::class,
    'municipios' => MunicipiosController::class,
    'posiciones' => PositionsController::class,
]);

Route::resource('ruta', NombreControladorController::class);

Route::resource('equipos', EquiposController::class)->middleware('auth');

Route::resource('jugadores', JugadoresController::class)->middleware('auth');