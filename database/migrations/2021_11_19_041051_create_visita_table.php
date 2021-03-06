<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('visita', function (Blueprint $table) {
            $table->unsignedsmallInteger('ID_APARTAMENTO');
            $table->unsignedInteger('ID_VISITANTE');
            $table->unsignedbigInteger('ID_VEHICULO');
            $table->unsignedbigInteger('NUMERO_PARQUEADERO');

            $table->dateTime('FECHA_HORA_INICIO_VISITA');
            $table->dateTime('FECHA_HORA_FIN_VISITA');
            $table->timestamps();

            $table->foreign('ID_APARTAMENTO')->references('ID_APARTAMENTO')->on('apartamento');
            $table->foreign('ID_VISITANTE')->references('ID_VISITANTE')->on('visitante');
            $table->foreign('ID_VEHICULO')->references('id')->on('vehiculos');
            $table->foreign('NUMERO_PARQUEADERO')->references('id')->on('parqueadero_visitas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visita');
    }
}
