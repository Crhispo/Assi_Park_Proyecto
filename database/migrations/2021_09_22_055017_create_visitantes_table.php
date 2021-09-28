<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitante', function (Blueprint $table) {
            $table->increments('ID_VISITANTE');
            $table->unsignedTinyInteger('ID_TIPO_IDENTIFICACION');
            $table->unsignedInteger('NUMERO_DOCUMENTO')->unique();
            $table->string('NOMBRE', 45);
            $table->string('APELLIDO', 45);
            $table->unsignedInteger('CELULAR1');
            $table->unsignedInteger('CELULAR2')->nullable();
            $table->boolean('ESTADO_VISITANTE')->default(1);
            $table->timestamps();
            $table->foreign('ID_TIPO_IDENTIFICACION')->references('ID_IDENTIFICACION')->on('tipo_identificacion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitante');
    }
}
