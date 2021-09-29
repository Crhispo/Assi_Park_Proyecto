<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartamento', function (Blueprint $table) {
            $table->smallIncrements('ID_APARTAMENTO');
            $table->unsignedBigInteger('NUMERO_APTO');
            $table->unsignedBigInteger('BLOQUE');
            $table->boolean('ESTADO_APTO')->default(0);

            $table->timestamps();

            $table->foreign('NUMERO_APTO')->references('id')->on('numeroapartamento');
            $table->foreign('BLOQUE')->references('id')->on('bloque'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartamento');
    }
}
