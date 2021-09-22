<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParqueaderosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parqueaderos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_parqueadero_id');
            $table->string('TAMAÑO', 20);
            $table->string('DESCRIPCION', 255);
            $table->boolean('ESTADO_PARQUEADERO')->default(1);
            $table->timestamps();
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
        Schema::dropIfExists('parqueaderos');
    }
}
