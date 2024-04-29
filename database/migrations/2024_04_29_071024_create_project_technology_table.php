<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('project_technology', function (Blueprint $table) {
            
            // aggiungo la tabella per il project specificando che sia una chiave esterna con vincolo
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();

            // aggiungo la tabella per la technology specificando che sia una chiave esterna con vincolo
            $table->foreignId('technology_id')->constrained()->cascadeOnDelete();

            // il db utilizzerà come chiave primaria la coppia dei due valori
            $table->primary(['project_id','technology_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_technology');
    }
};
