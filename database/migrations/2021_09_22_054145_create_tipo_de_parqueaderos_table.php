<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoDeParqueaderosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_de_parqueadero_vehiculo', function (Blueprint $table) {
            $table->tinyIncrements('ID_TIPO_PARQUEADERO_VEHICULO');
            $table->string('TIPO_PARQUEADERO_VEHICULO',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_de_parqueadero_vehiculo');
    }
}
