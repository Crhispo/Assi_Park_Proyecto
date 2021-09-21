<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleAsignacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_asignacions', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('APARTAMENTO_ID_APARTAMENTO');
            $table->tinyInteger('ID_VEHICULO');
            $table->tinyInteger('NUMERO_PARQUEADERO');
            $table->timestamp('FECHA_INICIO_DE_ASIGNACION_PARQUEADERO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_asignacions');
    }
}
