<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration 
{
    public function up(): void
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->id();

            // Clasificación y Origen
            $table->enum('entidad', ['Municipal', 'Estatal', 'JMAS'])->comment('Filtro principal para el visualizador');
            $table->year('periodo_ejercicio');
            $table->string('origen_recursos')->nullable();

            // Datos de Identificación del Contrato
            $table->string('numero_contrato')->unique();
            $table->string('numero_proceso_id')->nullable();
            $table->string('categoria_nombre_compra')->nullable();
            $table->text('objeto_descripcion');
            $table->string('tipo_procedimiento')->nullable(); // Ej. Licitación Pública, Adjudicación Directa

            // Fechas y Montos Principales
            $table->date('fecha_contrato')->nullable();
            $table->decimal('monto_total_contrato', 15, 2)->nullable()->comment('Monto total con impuestos');

            // Proveedor Adjudicado (El Ganador Final)
            $table->string('proveedor')->nullable();
            $table->string('rfc_proveedor')->nullable();

            // Estado y Seguimiento
            $table->string('estado_procedimiento')->nullable();

            // Geolocalización para el Mapa Interactivo (Leaflet)
            $table->decimal('latitud', 10, 8)->nullable();
            $table->decimal('longitud', 11, 8)->nullable();

            $table->timestamps();
            $table->softDeletes(); // Agrego esto para que, si alguien borra una obra, no se pierda permanentemente de la BD (Papelera de reciclaje)
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('obras');
    }
};