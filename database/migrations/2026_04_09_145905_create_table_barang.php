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
        Schema::create('table_barang', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('nama_barang', 255);
            $table->float('berat_barang');
            $table->float('tinggi_barang');
            $table->enum('barang_tersedia', ['ya', 'tidak']);
            $table->string('lokasi_gudang', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_barang');
    }
};
