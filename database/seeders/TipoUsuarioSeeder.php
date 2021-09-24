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
            ['nombre_tipo_usuario' => 'Administrador'],
            ['nombre_tipo_usuario' => 'Residente'],
            ['nombre_tipo_usuario' => 'Guarda seguridad']
        ];

        foreach ($tiposUsuarios as $tipoUsuario) {
            TipoUsuario::create($tipoUsuario);
        }
    }
}
