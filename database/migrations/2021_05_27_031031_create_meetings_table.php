<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->text('motivacion');
            $table->string('idRescatador')->nullable();
            $table->timestamps();
            $table->foreignId('idUsuario')->constrained('users');
            $table->foreignId('idPublicacion')->constrained('publicaciones');
            $table->foreignId('idEstadoMeeting')->nullable()->constrained('estados_meeting');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meetings');
    }
}
