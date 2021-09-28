<?php

namespace Database\Seeders;

use App\Models\TipoIdentificacion;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tiposIdentificaciones = [
            ['nombre_tipo_identificacion' => 'Cédula de Ciudadanía'],
            ['nombre_tipo_identificacion' => 'Tarjeta de Identidad'],
            ['nombre_tipo_identificacion' => 'Registro Civil'],
            ['nombre_tipo_identificacion' => 'Tarjeta de extranjería'],
            ['nombre_tipo_identificacion' => 'Pasaporte'],
            ['nombre_tipo_identificacion' => 'Tipo de documento extranjero']
        ];

        foreach ($tiposIdentificaciones as $tipoIdentificacion) {
            TipoIdentificacion::create($tipoIdentificacion);
        }
    }
}
