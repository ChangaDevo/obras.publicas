<?php

namespace App\Imports;

use App\Models\Proveedor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProveedoresImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Si el RFC ya existe, actualiza; si no, crea uno nuevo.
        return Proveedor::updateOrCreate(
        ['rfc' => $row['rfc']], // Buscamos por RFC para evitar duplicados
        [
            'nombre_razon_social' => $row['nombre'],
            'persona_fisica_moral' => $row['tipo'], // Ej: Fisica o Moral
            'representante_legal' => $row['representante'],
            'domicilio_fiscal' => $row['domicilio'],
        ]
        );
    }
}