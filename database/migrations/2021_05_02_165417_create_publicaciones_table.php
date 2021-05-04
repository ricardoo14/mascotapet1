<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id();
            $table->date('fechaPublicacion');
            $table->timestamps();
            $table->foreignId('idUsuario')->constrained('users');
            $table->foreignId('idMascota')->constrained('mascotas');
            $table->foreignId('idFundacion')->constrained('fundaciones');
            $table->foreignId('idEstadoPublicacion')->constrained('estados_publicacion');
        });
    }
    
   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicaciones');
    }
}
