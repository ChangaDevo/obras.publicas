<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Obra extends Model
{
    use HasFactory, SoftDeletes;

    // Campos que permitimos llenar masivamente
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Relación: Una obra tiene MUCHAS propuestas
    public function propuestas()
    {
        return $this->hasMany(Propuesta::class);
    }

    // Relación: Una obra tiene UN análisis de riesgo
    public function indicadorRiesgo()
    {
        return $this->hasOne(IndicadorRiesgo::class);
    }

    // Relación: Una obra tiene MUCHAS evidencias ciudadanas
    public function evidencias()
    {
        return $this->hasMany(EvidenciaCiudadana::class);
    }

    // Helper: Traer solo las evidencias que el administrador ya aprobó
    public function evidenciasAprobadas()
    {
        return $this->hasMany(EvidenciaCiudadana::class)->where('estatus', 'aprobada');
    }
}