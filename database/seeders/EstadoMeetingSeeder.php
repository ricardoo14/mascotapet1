<?php

namespace Database\Seeders;

use App\Models\EstadoMeeting;
use Illuminate\Database\Seeder;

class EstadoMeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estadoMeeting = new EstadoMeeting();
        $estadoMeeting->estadoMeeting = "Pendiente";
        $estadoMeeting->save();

        $estadoMeeting2 = new EstadoMeeting();
        $estadoMeeting2->estadoMeeting = "Aceptado";
        $estadoMeeting2->save();

        $estadoMeeting3 = new EstadoMeeting();
        $estadoMeeting3->estadoMeeting = "Denegado";
        $estadoMeeting3->save();

        $estadoMeeting4 = new EstadoMeeting();
        $estadoMeeting4->estadoMeeting = "Adoptado";
        $estadoMeeting4->save();
    }
}
