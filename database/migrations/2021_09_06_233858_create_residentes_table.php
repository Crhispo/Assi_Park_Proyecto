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
        Schema::create('residentes', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('NUMERO_IDENTIFICACION');
            $table->unsignedTinyInteger('ID_IDENTIFICACION');
            $table->string('NOMBRE', 45);
            $table->string('APELLIDO', 45);
            $table->tinyInteger('SEXO');
            $table->unsignedInteger('TELEFONO')->nullable()->index('RESIDENTE_TELEFONO');
            $table->unsignedInteger('CELULAR1');
            $table->unsignedInteger('CELULAR2')->nullable();
            $table->string('CORREO_ELECTRONICO', 255)->nullable()->index('RESIDENTE_CORREO');
            $table->unsignedSmallInteger('ID_APARTAMENTO');
            $table->boolean('ESTADO_RESIDENTE')->default(1);

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
        Schema::dropIfExists('residentes');
    }
}
