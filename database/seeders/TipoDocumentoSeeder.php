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
            ['identificacion' => 'Cédula de Ciudadanía'],
            ['identificacion' => 'Tarjeta de Identidad'],
            ['identificacion' => 'Registro Civil'],
            ['identificacion' => 'Tarjeta de extranjería'],
            ['identificacion' => 'Pasaporte'],
            ['identificacion' => 'Tipo de documento extranjero']
        ];

        foreach ($tiposIdentificaciones as $tipoIdentificacion) {
            TipoIdentificacion::create($tipoIdentificacion);
        }
    }
}
