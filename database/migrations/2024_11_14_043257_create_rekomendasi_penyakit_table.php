<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rekomendasi_penyakit', function (Blueprint $table) {
            $table->integer('id_rkm_penyakit')->primary();
            $table->integer('id_gejala', 2);
            $table->integer('gejala')->unique();
            $table->text('penyebab');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekomendasi_penyakit');
    }
};
