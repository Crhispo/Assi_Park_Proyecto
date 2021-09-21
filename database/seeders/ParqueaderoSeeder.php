<?php

namespace Database\Seeders;
use App\Models\Parqueadero;
use Illuminate\Database\Seeder;

class ParqueaderoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parqueadero::factory(10)->create();
    }
}
