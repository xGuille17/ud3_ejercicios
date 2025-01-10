<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;  // Asegúrate de importar el modelo User
use App\Models\Alumnos;  // También importa otros modelos que puedas estar usando
use App\Models\Asignaturas;
use App\Models\Notas;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Llamar los seeders para otras tablas
        $this->call([
            AlumnosTableSeeder::class,
            AsignaturasTableSeeder::class,
            NotasTableSeeder::class,
        ]);

        // Crear un usuario de prueba
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
