<?php

namespace App\Imports;

use App\Models\Obra;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ObrasImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Si la fila del Excel viene vacía o sin número de contrato, la saltamos
        if (!isset($row['numero_contrato'])) {
            return null;
        }

        // Validación: Si el contrato ya existe en la base de datos, no lo duplicamos
        if (Obra::where('numero_contrato', $row['numero_contrato'])->exists()) {
            return null;
        }

        return new Obra([
            'entidad' => $row['entidad'],
            'periodo_ejercicio' => $row['periodo_ejercicio'],
            'numero_contrato' => $row['numero_contrato'],
            'objeto_descripcion' => $row['objeto_descripcion'],
            'monto_total_contrato' => $row['monto_total_contrato'] ?? 0,
            'fecha_contrato' => $row['fecha_contrato'],
            'proveedor' => $row['proveedor'],
        ]);
    }
}