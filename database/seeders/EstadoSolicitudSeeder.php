<?php

namespace Database\Seeders;

use App\Models\EstadoSolicitud;
use Illuminate\Database\Seeder;

class EstadoSolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estadoSolicitud = new EstadoSolicitud();
        $estadoSolicitud->estadoSolicitud = "Pendiente";
        $estadoSolicitud->save();

        $estadoSolicitud2 = new EstadoSolicitud();
        $estadoSolicitud2->estadoSolicitud = "Publicado";
        $estadoSolicitud2->save();

        $estadoSolicitud3 = new EstadoSolicitud();
        $estadoSolicitud3->estadoSolicitud = "No publicado";
        $estadoSolicitud3->save();
    }
}
