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
        Schema::create('bank_sampah', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->timestamp('tanggal');
            $table->string('name');
            $table->enum('kategori', ['basah', 'kering']);
            $table->string('berat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_sampah');
    }
};
