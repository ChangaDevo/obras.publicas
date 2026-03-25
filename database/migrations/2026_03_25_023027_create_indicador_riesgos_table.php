<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration 
{
    public function up(): void
    {
        Schema::create('indicadores_riesgos', function (Blueprint $table) {
            $table->id();

            // Relación 1 a 1 con la tabla obras (unique asegura que solo haya un registro de riesgo por obra)
            $table->foreignId('obra_id')->unique()->constrained('obras')->onDelete('cascade');

            // Notas y Datos Base
            $table->text('notas_karewa')->nullable();
            $table->date('fecha_obtencion_datos')->nullable();
            $table->text('observaciones')->nullable();

            // Riesgos de Adjudicación Directa (AD)
            $table->boolean('adjudicaciones_exceden_limite')->default(false);
            $table->decimal('monto_excede_limite_ad', 15, 2)->nullable();
            $table->boolean('fraccionar_riesgo_ad')->default(false)->comment('Riesgo de fraccionar contratos para evitar licitación');

            // Riesgos de Competencia y Plazos
            $table->boolean('ausencia_competencia_propu')->default(false);
            $table->boolean('plazos_riesgo')->default(false)->comment('Corto plazo para presentar propuestas');
            $table->boolean('empresa_favorita_riesgo')->default(false);
            $table->boolean('empresa_fantasma_riesgo')->default(false)->comment('FantEF_riesgo');

            // Riesgos Económicos
            $table->boolean('sobreprecio_riesgo')->default(false);
            $table->decimal('sobreprecio_monto', 15, 2)->nullable();
            $table->boolean('diferencia_contrato_presupuesto')->default(false)->comment('Dif_cont_pres');

            // Semáforo Final
            $table->string('riesgo_general')->nullable()->comment('Ej. Alto, Medio, Bajo o Sin Riesgo');

            // TRUCO DE ARQUITECTURA: Columna JSON para la analítica profunda
            $table->json('metricas_crudas')->nullable()
                ->comment('Guarda campos como: Num_cont_emp, Porc_tot_lp, Frec_contr_lp, etc.');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('indicadores_riesgos');
    }
};