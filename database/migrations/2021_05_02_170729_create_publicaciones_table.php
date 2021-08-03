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
            $table->string('idFamiliaBiologica')->nullable();
            $table->timestamps();
            $table->foreignId('idSolicitud')->constrained('solicitudes')->onDelete('cascade');
            $table->foreignId('idFundacion')->nullable()->constrained('fundaciones');
            $table->foreignId('idEstadoPublicacion')->nullable()->constrained('estados_publicacion');
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
