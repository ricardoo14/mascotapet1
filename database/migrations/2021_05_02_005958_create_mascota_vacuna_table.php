<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMascotaVacunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascota_vacuna', function (Blueprint $table) {
            $table->id();
            $table->boolean('aplicada');
            $table->timestamps();
            $table->foreignId('idMascota')->constrained('mascotas');
            $table->foreignId('idVacuna')->constrained('vacunas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascota_vacuna');
    }
}
