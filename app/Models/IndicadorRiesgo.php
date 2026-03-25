<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndicadorRiesgo extends Model
{
    use HasFactory;

    // Esta es la tabla que creamos en la migración
    protected $table = 'indicadores_riesgos';

    protected $guarded = ['id', 'created_at', 'updated_at']; // Permitimos guardar todo lo demás

    // Relación inversa: Un indicador pertenece a una obra
    public function obra()
    {
        return $this->belongsTo(Obra::class);
    }
}