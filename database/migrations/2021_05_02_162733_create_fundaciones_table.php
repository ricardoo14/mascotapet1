<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fundaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombreFundacion',40);
            $table->string('rut',10);
            $table->string('comuna',40);
            $table->timestamps();
            $table->foreignId('idRepresentante')->constrained('representantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fundaciones');
    }
}
