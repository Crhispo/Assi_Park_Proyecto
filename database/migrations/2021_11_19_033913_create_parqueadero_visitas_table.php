<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParqueaderoVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parqueadero_visitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedtinyInteger('tipo_parqueadero_id');
            $table->string('TAMAÑO', 20);
            $table->string('DESCRIPCION', 255);
            $table->boolean('ESTADO_PARQUEADERO')->default(1);
            $table->boolean('OCUPADO')->default(0);
            $table->timestamps();
            $table->foreign('tipo_parqueadero_id')->references('ID_TIPO_PARQUEADERO_VEHICULO')->on('tipo_de_parqueadero_vehiculo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parqueadero_visitas');
    }
}
