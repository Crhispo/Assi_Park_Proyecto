<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleAsignacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_asignaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apartamento_id');
            $table->foreignId('vehiculo_id');
            $table->foreignId('parqueadero_id');
            $table->timestamps();
            $table->foreign('apartamento_id')->references('id')->on('apartamentos');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');
            $table->foreign('parqueadero_id')->references('id')->on('parqueaderos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_asignaciones');
    }
}
