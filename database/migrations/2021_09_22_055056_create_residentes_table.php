<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residente', function (Blueprint $table) {
            $table->unsignedInteger('NUMERO_IDENTIFICACION', );
            $table->primary('NUMERO_IDENTIFICACION');
            $table->unsignedTinyInteger('ID_TIPO_IDENTIFICACION');
            $table->string('NOMBRE', 45);
            $table->string('APELLIDO', 45);
            $table->boolean('SEXO');
            $table->unsignedInteger('TELEFONO')->nullable();
            $table->unsignedInteger('CELULAR1');
            $table->unsignedInteger('CELULAR2')->nullable();
            $table->string('CORREO_ELECTRONICO', 255);
            $table->unsignedsmallInteger('ID_APARTAMENTO');
            $table->boolean('ESTADO_RESIDENTE')->default(1);
            $table->timestamps();

            $table->foreign('ID_TIPO_IDENTIFICACION')->references('ID_IDENTIFICACION')->on('tipo_identificacion');
            $table->foreign('ID_APARTAMENTO')->references('ID_APARTAMENTO')->on('apartamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residente');
    }
}
