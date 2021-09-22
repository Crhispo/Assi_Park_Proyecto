<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residentes', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('NUMERO_IDENTIFICACION')->unique();
            $table->foreignId('tipo_identificacion_id');
            $table->string('NOMBRE', 45);
            $table->string('APELLIDO', 45);
            $table->tinyInteger('SEXO');
            $table->unsignedInteger('TELEFONO')->nullable();
            $table->unsignedInteger('CELULAR1');
            $table->unsignedInteger('CELULAR2')->nullable();
            $table->string('CORREO_ELECTRONICO', 255);
            $table->foreignId('apartamento_id');
            $table->boolean('ESTADO_RESIDENTE')->default(1);
            $table->timestamps();
            $table->foreign('tipo_identificacion_id')->references('id')->on('tipo_identificaciones');
            $table->foreign('apartamento_id')->references('id')->on('apartamentos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residentes');
    }
}
