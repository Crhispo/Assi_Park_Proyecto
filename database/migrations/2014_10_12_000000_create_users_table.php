<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('numero_identificacion');
            $table->string('nombre', 45);
            $table->string('apellido', 45);
            $table->char('sexo', 1);
            $table->string('direccion', 255);
            $table->integer('telefono')->unique();
            $table->integer('celular1');
            $table->integer('celular2');
            $table->string('correo_electronico', 255);
            $table->string('password', 45);
            $table->char('estado_usuario', 1);
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
