<?php

namespace Database\Seeders;

use App\Models\EstadoPublicacion;
use Illuminate\Database\Seeder;

class EstadoPublicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estadoPublicacion = new EstadoPublicacion();
        $estadoPublicacion->estado ="Publicado";
        $estadoPublicacion->save();

        $estadoPublicacion2 = new EstadoPublicacion();
        $estadoPublicacion2->estado ="No publicado";
        $estadoPublicacion2->save();
    }
}
