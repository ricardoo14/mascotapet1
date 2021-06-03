<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',40);
            $table->string('segundoNombre',40);
            $table->string('apellido',40);
            $table->string('segundoApellido',40);
            $table->string('rut',10)->unique();
            $table->date('fechaDeNacimiento');
            $table->string('email',80)->unique();
            $table->string('telefono',12);
            $table->string('direccion',40);
            $table->string('ciudad',60);
            $table->string('region',60);
            $table->string('resenaPersonal');
            $table->boolean('activo')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->default('/images/default-avatar.jpg');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
