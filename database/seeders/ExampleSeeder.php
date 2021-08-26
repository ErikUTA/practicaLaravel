<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Calificaciones;

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Calificaciones::firstOrCreate([
            'id' => 1,
            'materia' => 4,
            'reportes' => 9,
            'materias_reprobadas' => 2
        ]);
    }
}
