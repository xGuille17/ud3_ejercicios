<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion'];

    // Relación uno a muchos con Nota
    public function notas()
    {
        return $this->hasMany(Nota::class);
    }
}
