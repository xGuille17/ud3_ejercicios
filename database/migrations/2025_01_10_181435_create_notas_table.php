<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('alumno_id')->constrained('alumnos')->onDelete('cascade'); // Foreign Key to Alumnos
            $table->foreignId('asignatura_id')->constrained('asignaturas')->onDelete('cascade'); // Foreign Key to Asignaturas
            $table->integer('nota');
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
