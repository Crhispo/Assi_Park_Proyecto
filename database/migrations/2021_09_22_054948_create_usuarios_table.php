<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->unsignedInteger('NUMERO_IDENTIFICACION');
            $table->primary('NUMERO_IDENTIFICACION');
            $table->unsignedTinyInteger('ID_TIPO_USUARIO');
            $table->unsignedTinyInteger('ID_TIPO_IDENTIFICACION');
            $table->string('NOMBRE', 45);
            $table->string('APELLIDO', 45);
            $table->boolean('SEXO');
            $table->string('DIRECCION', 255);
            $table->unsignedInteger('TELEFONO')->nullable();
            $table->unsignedInteger('CELULAR1');
            $table->unsignedInteger('CELULAR2')->nullable();
            $table->string('Correo', 255)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('CONTRASENA', 45);
            $table->rememberToken();
            $table->boolean('ESTADO_USUARIO')->default(1);
            $table->timestamps();

            $table->foreign('ID_TIPO_USUARIO')->references('ID_TIPO_USUARIO')->on('tipo_usuario');
            $table->foreign('ID_TIPO_IDENTIFICACION')->references('ID_IDENTIFICACION')->on('tipo_identificacion');

//$tabla->foreign()-References()->on('');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
