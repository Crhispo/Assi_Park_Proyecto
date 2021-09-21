<?php

namespace Database\Factories;

use App\Models\Parqueadero;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class ParqueaderoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Parqueadero::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Tipo_parqueadero' => random_int(0,10), 
            'Tamano'=>random_int(0,500),
            'Descripcion' => $this->faker->name(),
        'Estado'=>random_int(0,1)
        ];
    }
}
