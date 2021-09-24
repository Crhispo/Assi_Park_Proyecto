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
            $table->unsignedInteger('numero_identificacion')->unique();
            $table->foreignId('tipo_usuario_id');
            $table->foreignId('tipo_identificacion_id');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->tinyInteger('sexo');
            $table->string('direccion', 70);
            $table->unsignedInteger('telefono')->nullable();
            $table->unsignedInteger('celular1');
            $table->unsignedInteger('celular2')->nullable();
            $table->string('email', 60)->unique();
            $table->string('password', 100);
            $table->boolean('estado_usuario')->default(1);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('tipo_usuario_id')->references('id')->on('tipo_usuarios');
            $table->foreign('tipo_identificacion_id')->references('id')->on('tipo_identificaciones');
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
