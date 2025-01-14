<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $fillable = ['alumno_id', 'asignatura_id', 'calificacion'];

    // Relación muchos a uno con Alumno
    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }

    // Relación muchos a uno con Asignatura
    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class);
    }
}
