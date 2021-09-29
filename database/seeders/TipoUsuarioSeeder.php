<?php

namespace Database\Seeders;

use App\Models\TipoUsuario;
use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tiposUsuarios = [
            ['tipo_usuario' => 'Administrador'],
            ['tipo_usuario' => 'Secretaria'],
            ['tipo_usuario' => 'Guarda seguridad']
        ];

        foreach ($tiposUsuarios as $tipoUsuario) {
            TipoUsuario::create($tipoUsuario);
        }
    }
}
