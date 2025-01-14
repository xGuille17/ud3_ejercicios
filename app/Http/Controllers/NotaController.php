<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    /**
     * GET /api/notas -> devuelve todos los notas
     */
    public function index()
    {
        // Devuelve todas las notas con sus relaciones alumno y asignatura
        return Nota::with(['alumno', 'asignatura'])->get();
    }

    /**
     * GET /api/notas/{id} -> devuelve el nota id
     */
    public function show(string $id)
    {
        // Busca la nota por id e incluye las relaciones
        $nota = Nota::with(['alumno', 'asignatura'])->find($id);

        if (!$nota) {
            return response()->json(['message' => 'Nota no encontrada'], 404);
        }

        return $nota;
    }

    /**
     * POST /api/notas -> crea un nuevo nota
     */
    public function store(Request $request)
    {
        // Validación de datos
        $validatedData = $request->validate([
            'alumno_id' => 'required|exists:alumnos,id',
            'asignatura_id' => 'required|exists:asignaturas,id',
            'calificacion' => 'required|numeric|min:0|max:10',
        ]);

        // Creación de una nueva nota
        $nota = Nota::create($validatedData);

        return response()->json($nota, 201);
    }

    /**
     * PUT /api/notas/{id} -> actualiza el notas id
     */
    public function update(Request $request, string $id)
    {
        // Buscar la nota por id
        $nota = Nota::find($id);

        if (!$nota) {
            return response()->json(['message' => 'Nota no encontrada'], 404);
        }

        // Validación de datos
        $validatedData = $request->validate([
            'alumno_id' => 'exists:alumnos,id',
            'asignatura_id' => 'exists:asignaturas,id',
            'calificacion' => 'numeric|min:0|max:10',
        ]);

        // Actualización de la nota
        $nota->update($validatedData);

        return response()->json($nota);
    }

    /**
     * DELETE /api/notas/{id} -> borra el notas id
     */
    public function destroy(string $id)
    {
        // Buscar la nota por id
        $nota = Nota::find($id);

        if (!$nota) {
            return response()->json(['message' => 'Nota no encontrada'], 404);
        }

        // Eliminación de la nota
        $nota->delete();

        return response()->json(['message' => 'Nota eliminada correctamente']);
    }
}
