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
            $table->foreignId('ID_TIPO_USUARIO');
            $table->foreignId('ID_TIPO_IDENTIFICACION');
            $table->string('NOMBRE', 45);
            $table->string('APELLIDO', 45);
            $table->boolean('SEXO');
            $table->string('DIRECCION', 255);
            $table->unsignedInteger('TELEFONO')->nullable();
            $table->unsignedInteger('CELULAR1');
            $table->string('email', 255)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 100);
            $table->rememberToken();
            $table->boolean('ESTADO_USUARIO')->default(1);
            $table->timestamps();

            $table->foreign('ID_TIPO_USUARIO')->references('id')->on('tipo_usuarios');
            $table->foreign('ID_TIPO_IDENTIFICACION')->references('id')->on('tipo_identificaciones');

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
