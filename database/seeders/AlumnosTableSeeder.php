<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nombre' => 'Juan Pérez',
                'email' => 'juan.perez@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'María González',
                'email' => 'maria.gonzalez@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Carlos López',
                'email' => 'carlos.lopez@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        // Loop through each record and insert it if not already present
        foreach ($data as $alumno) {
            DB::table('alumnos')->updateOrInsert(
                ['email' => $alumno['email']], // check for existing email
                [
                    'nombre' => $alumno['nombre'],
                    'email' => $alumno['email'],
                    'created_at' => $alumno['created_at'],
                    'updated_at' => $alumno['updated_at'],
                ]
            );
        }
    }
}
