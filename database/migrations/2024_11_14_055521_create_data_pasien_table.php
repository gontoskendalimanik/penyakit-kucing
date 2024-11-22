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
        Schema::create('data_pasien', function (Blueprint $table) {
            $table->id('id_pasien')->primary();
            $table->string('nama', 20);
            $table->string('kelamin', 20);
            $table->text('alamat');
            $table->string('pemilik', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pasien');
    }
};
