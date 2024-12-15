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
        Schema::create('hasil_analisa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pasien');
            $table->string('nama', 20);
            $table->string('kelamin', 20);
            $table->text('alamat');
            $table->string('pemilik', 20);
            $table->text('nm_gejala');
            $table->string('nm_penyakit', length: 20);
            $table->text('definisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_analisa');
    }
};
