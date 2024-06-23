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
        Schema::create('room_levels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['VIP', 'Reguler'])->default('Reguler'); // Tambah kolom type
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_levels');
    }
};
