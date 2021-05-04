<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombreMascota',30);
            $table->string('ciudad',60);
            $table->string('region',60);
            $table->boolean('estadoEsterilizacion');
            $table->string('descripcion');
            $table->integer('edad');
            $table->timestamps();
            $table->foreignId('idFamiliaBiologica')->constrained('familias_biologica');
            $table->foreignId('idAlbum')->constrained('albumes');
            $table->foreignId('idEstadoMascota')->constrained('estados_mascota');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascotas');
    }
}
