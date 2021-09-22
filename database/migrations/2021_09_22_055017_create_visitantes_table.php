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
        Schema::create('visitantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_identificacion_id');
            $table->unsignedInteger('NUMERO_DOCUMENTO')->unique();
            $table->string('NOMBRE', 45);
            $table->string('APELLIDO', 45);
            $table->unsignedInteger('CELULAR1');
            $table->unsignedInteger('CELULAR2')->nullable();
            $table->boolean('ESTADO_VISITANTE')->default(1);
            $table->timestamps();
            $table->foreign('tipo_identificacion_id')->references('id')->on('tipo_identificaciones');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitantes');
    }
}
