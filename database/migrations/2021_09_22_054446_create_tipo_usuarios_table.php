<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('tipo_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tipo_usuario',30);
            $table->timestamps();
=======
        Schema::create('tipo_usuario', function (Blueprint $table) {
            $table->tinyIncrements('ID_TIPO_USUARIO');
            $table->string('TIPO_USUARIO',20);
>>>>>>> 2c94ab5b62d9e4378c70c5db34d492ef57b54c8f
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_usuario');
    }
}
