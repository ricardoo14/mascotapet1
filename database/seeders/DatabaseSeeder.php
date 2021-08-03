<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(EstadoMeetingSeeder::class);
        $this->call(EstadoPublicacionSeeder::class);
        $this->call(EstadoSolicitudSeeder::class);
        $this->call(FamiliaBiologicaSeeder::class);
    }
}
