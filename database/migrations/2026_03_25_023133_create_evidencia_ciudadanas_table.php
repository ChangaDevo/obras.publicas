<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration 
{
    public function up(): void
    {
        Schema::create('evidencias_ciudadanas', function (Blueprint $table) {
            $table->id();

            // Relación con la obra
            $table->foreignId('obra_id')->constrained('obras')->onDelete('cascade');

            // Datos de la evidencia
            $table->string('nombre_ciudadano')->nullable()->comment('Puede ser anónimo');
            $table->text('comentario')->nullable();
            $table->string('ruta_archivo')->comment('Ruta de la foto guardada en el servidor');

            // El sistema de moderación
            $table->enum('estatus', ['pendiente', 'aprobada', 'rechazada'])->default('pendiente');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('evidencias_ciudadanas');
    }
};