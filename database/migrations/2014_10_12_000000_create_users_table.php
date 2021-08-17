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
            $table->id();
            $table->foreignId('tipodocumento_id');
            $table->foreignId('tipousuario_id');
            $table->integer('numero_identificacion')->unique();
            $table->string('nombre', 45);
            $table->string('apellido', 45);
            $table->char('sexo', 1);
            $table->string('direccion', 255);
            $table->integer('telefono')->unique();
            $table->integer('celular1');
            $table->integer('celular2');
            $table->string('email', 255);
            $table->string('password', 100);
            $table->char('estado_usuario', 1);
            $table->timestamps();

            //relaciones - Se estan uniendo
            $table->foreign('tipodocumento_id')->references('id')->on('tipo_identificaciones');
            $table->foreign('tipousuario_id')->references('id')->on('tipo_usuarios');
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
