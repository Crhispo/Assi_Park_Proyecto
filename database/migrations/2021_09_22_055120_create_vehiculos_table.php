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
            $table->foreignId('residente_id');
            $table->foreignId('marca_id');
            $table->foreignId('color_id');
            $table->foreignId('tipo_parqueadero_id');
            $table->string('placa', 7)->unique();
            $table->boolean('ESTADO_VEHICULO')->default(1);
            $table->timestamps();
            $table->foreign('residente_id')->references('id')->on('residentes');
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('color_id')->references('id')->on('colores');
            $table->foreign('tipo_parqueadero_id')->references('id')->on('tipo_de_parqueaderos');

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
