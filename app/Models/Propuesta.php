<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propuesta extends Model
{
    use HasFactory;

    // 1. Permitimos que estos campos se guarden masivamente desde el formulario
    protected $fillable = [
        'obra_id',
        'nombre_empresa',
        'monto_propuesto',
        'es_solvente',
        'es_ganadora'
    ];

    // 2. (Opcional pero recomendado) La relación inversa: Una propuesta pertenece a una obra
    public function obra()
    {
        return $this->belongsTo(Obra::class);
    }
}