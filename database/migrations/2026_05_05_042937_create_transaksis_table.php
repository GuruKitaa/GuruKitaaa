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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();

            $table->foreignId('guru_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('sesi_id')
                ->constrained('sesis')
                ->cascadeOnDelete();

            $table->decimal('jumlah', 15, 2);
            $table->enum('status', ['pending', 'berhasil', 'gagal'])
                ->default('pending');

            $table->softDeletes();
            $table->timestamps();

            $table->index(['guru_id', 'sesi_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
