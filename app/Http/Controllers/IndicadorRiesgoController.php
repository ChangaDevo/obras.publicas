<?php

namespace App\Http\Controllers;

use App\Models\Obra;
use Illuminate\Http\Request;

class IndicadorRiesgoController extends Controller
{
    public function store(Request $request, Obra $obra)
    {
        // Extraemos todos los datos del formulario excepto el token de seguridad
        $data = $request->except('_token');

        // Lista de nuestros checkboxes de riesgo (si no se marcan, Laravel no los envía, así que los forzamos a false/0)
        $checkboxes = [
            'sobreprecio_riesgo',
            'empresa_fantasma_riesgo',
            'fraccionar_riesgo_ad',
            'ausencia_competencia_propu'
        ];

        foreach ($checkboxes as $campo) {
            $data[$campo] = $request->has($campo);
        }

        // Magia de Laravel: updateOrCreate busca si ya hay un registro con ese obra_id. 
        // Si existe, lo actualiza. Si no, lo crea.
        $obra->indicadorRiesgo()->updateOrCreate(
        ['obra_id' => $obra->id],
            $data
        );

        return back()->with('success', 'El análisis de riesgos y banderas rojas se ha guardado correctamente.');
    }
}