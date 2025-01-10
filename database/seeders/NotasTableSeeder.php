<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notas')->insert([
            [
                'alumno_id' => 1, // ID de Juan Pérez
                'asignatura_id' => 1, // ID de Matemáticas
                'nota' => 85,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'alumno_id' => 2, // ID de María González
                'asignatura_id' => 2, // ID de Historia
                'nota' => 90,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'alumno_id' => 3, // ID de Carlos López
                'asignatura_id' => 3, // ID de Ciencias
                'nota' => 78,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
