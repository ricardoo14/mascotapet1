<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('nombreMascota',30);
            $table->string('ciudad',60);
            $table->string('region',60);
            $table->string('estadoEsterilizacion');
            $table->string('descripcion');
            $table->string('familiaBiologica');
            $table->string('vacunas');
            $table->string('descripcionSalud');
            $table->integer('edad');
            $table->timestamps();
            $table->foreignId('idUsuario')->constrained('users')->onDelete('cascade');
            $table->foreignId('idEstadoSolicitud')->nullable()->constrained('estados_solicitud');
            $table->foreignId('idAlbum')->nullable()->constrained('albumes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
}
