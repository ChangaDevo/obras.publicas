<?php

namespace App\Http\Controllers;

use App\Models\Obra;
use App\Models\Propuesta;
use Illuminate\Http\Request;

class PropuestaController extends Controller
{
    // Guarda una nueva propuesta vinculada a una obra específica
    public function store(Request $request, Obra $obra)
    {
        // 1. Validamos los datos
        $request->validate([
            'nombre_empresa' => 'required|string|max:255',
            'monto_propuesto' => 'nullable|numeric',
        ]);

        // 2. Creamos la propuesta usando la relación que definimos en el Modelo Obra
        $obra->propuestas()->create([
            'nombre_empresa' => $request->nombre_empresa,
            'monto_propuesto' => $request->monto_propuesto,
            // Si el checkbox viene en el formulario, se guarda como true (1), si no, false (0)
            'es_solvente' => $request->has('es_solvente'),
            'es_ganadora' => $request->has('es_ganadora'),
        ]);

        // 3. Regresamos a la vista del expediente con un mensaje de éxito
        return back()->with('success', 'La empresa participante se ha agregado correctamente.');
    }
}