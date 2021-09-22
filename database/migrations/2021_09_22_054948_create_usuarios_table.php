<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('NUMERO_IDENTIFICACION')->unique();
            $table->foreignId('tipo_usuario_id');
            $table->foreignId('tipo_identificacion_id');
            $table->string('NOMBRE', 45);
            $table->string('APELLIDO', 45);
            $table->tinyInteger('SEXO');
            $table->string('DIRRECION', 255);
            $table->unsignedInteger('TELEFONO')->nullable();
            $table->unsignedInteger('CELULAR1');
            $table->unsignedInteger('CELULAR2')->nullable();
            $table->string('CORREO_ELECTRONICO', 255);
            $table->string('CONTRASEÑA', 45);
            $table->boolean('ESTADO_USUARIO')->default(1);

            $table->timestamps();
            $table->foreign('tipo_usuario_id')->references('id')->on('tipo_usuarios');
            $table->foreign('tipo_identificacion_id')->references('id')->on('tipo_identificaciones');

//$tabla->foreign()-References()->on('');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}