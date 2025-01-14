<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    /**
     * GET /api/asignaturas -> devuelve todos los asignaturas
     */
    public function index()
    {
        // Devuelve todas las asignaturas
        return Asignatura::all();
    }

    /**
     * GET /api/asignaturas/{id} -> devuelve el asignaturas id
     */
    public function show(string $id)
    {
        // Busca la asignatura por id
        $asignatura = Asignatura::find($id);

        if (!$asignatura) {
            return response()->json(['message' => 'Asignatura no encontrada'], 404);
        }

        return $asignatura;
    }

    /**
     * POST /api/asignaturas -> crea un nuevo asignaturas
     */
    public function store(Request $request)
    {
        // Validación de datos
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        // Creación de una nueva asignatura
        $asignatura = Asignatura::create($validatedData);

        return response()->json($asignatura, 201);
    }

    /**
     * PUT /api/asignaturas/{id} -> actualiza el asignaturas id
     */
    public function update(Request $request, string $id)
    {
        // Buscar la asignatura por id
        $asignatura = Asignatura::find($id);

        if (!$asignatura) {
            return response()->json(['message' => 'Asignatura no encontrada'], 404);
        }

        // Validación de datos
        $validatedData = $request->validate([
            'nombre' => 'string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        // Actualización de la asignatura
        $asignatura->update($validatedData);

        return response()->json($asignatura);
    }

    /**
     * DELETE /api/asignaturas/{id} -> borra el asignaturas id
     */
    public function destroy(string $id)
    {
        // Buscar la asignatura por id
        $asignatura = Asignatura::find($id);

        if (!$asignatura) {
            return response()->json(['message' => 'Asignatura no encontrada'], 404);
        }

        // Eliminación de la asignatura
        $asignatura->delete();

        return response()->json(['message' => 'Asignatura eliminada correctamente']);
    }
}
