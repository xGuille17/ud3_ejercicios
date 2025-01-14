<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    // GET /api/alumnos -> devuelve todos los alumnos con sus notas
    public function index()
    {
        return Alumno::with('notas')->get();
    }

    // GET /api/alumnos/{id} -> devuelve el alumno id con sus notas
    public function show($id)
    {
        $alumno = Alumno::with('notas')->find($id);

        if (!$alumno) {
            return response()->json(['message' => 'Alumno no encontrado'], 404);
        }

        return $alumno;
    }

    // POST /api/alumnos -> crea un nuevo alumno
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:alumnos,email',
        ]);

        $alumno = Alumno::create($validatedData);

        return response()->json($alumno, 201);
    }

    // PUT /api/alumnos/{id} -> actualiza el alumno id
    public function update(Request $request, $id)
    {
        $alumno = Alumno::find($id);

        if (!$alumno) {
            return response()->json(['message' => 'Alumno no encontrado'], 404);
        }

        $validatedData = $request->validate([
            'nombre' => 'string|max:255',
            'email' => 'email|unique:alumnos,email,' . $id,
        ]);

        $alumno->update($validatedData);

        return response()->json($alumno);
    }

    // DELETE /api/alumnos/{id} -> borra el alumno id
    public function destroy($id)
    {
        $alumno = Alumno::find($id);

        if (!$alumno) {
            return response()->json(['message' => 'Alumno no encontrado'], 404);
        }

        $alumno->delete();

        return response()->json(['message' => 'Alumno eliminado correctamente']);
    }
}
