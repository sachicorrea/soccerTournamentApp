<?php

namespace Database\Seeders;
use App\Models\Posicion;
use Illuminate\Database\Seeder;

class PosicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posicion = new Posicion();
        $posicion->nombre = "Goalkeeper";
        $posicion->save();
        $posicion = new Posicion();
        $posicion->nombre = "Defender";
        $posicion->save();
        $posicion = new Posicion();
        $posicion->nombre = "Centreback";
        $posicion->save();
        $posicion = new Posicion();
        $posicion->nombre = "fullback";
        $posicion->save();
    }
}
