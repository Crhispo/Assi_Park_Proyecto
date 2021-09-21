<?php

namespace Database\Factories;

use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VehiculoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehiculo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Numero_de_identificacion_propetario' => random_int(0,10000000), 
            'Marca'=>random_int(0,100),
            'Color'=>random_int(0,100),
            'Tipo_parqueadero'=>random_int(0,100),
            'placa' =>random_int(001,999), 
        'estado'=>random_int(0,1)
    ];
    }
}
