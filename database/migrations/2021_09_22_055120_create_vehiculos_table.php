<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('NUMERO_IDENTIFICACION')->nullable();
            $table->unsignedtinyInteger('marca_id');
            $table->unsignedtinyInteger('color_id');
            $table->unsignedtinyInteger('tipo_parqueadero_id');
            $table->string('placa', 7)->unique();
            $table->boolean('ESTADO_VEHICULO')->default(1);
            $table->timestamps();

            $table->foreign('NUMERO_IDENTIFICACION')->references('NUMERO_IDENTIFICACION')->on('residente');
            $table->foreign('marca_id')->references('ID_MARCA')->on('Marca');
            $table->foreign('color_id')->references('ID_COLOR')->on('Color');
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
        Schema::dropIfExists('vehiculos');
    }
}
