<?php

namespace Database\Seeders;

use App\Models\FamiliaBiologica;
use Illuminate\Database\Seeder;

class FamiliaBiologicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $familiaBiologica = new FamiliaBiologica();
        $familiaBiologica->nombre = "Perro";
        $familiaBiologica->save();

        $familiaBiologica2 = new FamiliaBiologica();
        $familiaBiologica2->nombre = "Gato";
        $familiaBiologica2->save();

        $familiaBiologica3 = new FamiliaBiologica();
        $familiaBiologica3->nombre = "Otro";
        $familiaBiologica3->save();
    }
}
