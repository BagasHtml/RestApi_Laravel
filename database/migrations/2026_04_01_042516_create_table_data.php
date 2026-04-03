<?php

use Carbon\Traits\Timestamp;
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
        Schema::create('table_data', function (Blueprint $table) {
            $table->id()->autoIncrement()->primary();
            $table->string('username', 255)->unique();
            $table->string('email', 255)->unique();
            $table->string('address', 255);
            $table->Timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_data');
    }
};
