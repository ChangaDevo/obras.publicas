<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration 
{
    public function up(): void
    {
        Schema::create('propuestas', function (Blueprint $table) {
            $table->id();

            // Relación con la tabla obras
            // onDelele('cascade') significa que si borras la obra, se borran sus propuestas
            $table->foreignId('obra_id')->constrained('obras')->onDelete('cascade');

            // Datos de la empresa participante
            $table->string('nombre_empresa');
            $table->decimal('monto_propuesto', 15, 2)->nullable();

            // Banderas útiles basadas en tu lista de campos
            $table->boolean('es_solvente')->default(false)->comment('Indica si pasó la evaluación técnica/económica');
            $table->boolean('es_ganadora')->default(false)->comment('Indica si a esta empresa se le adjudicó el contrato');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('propuestas');
    }
};