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
        Schema::create('sesis', function (Blueprint $table) {
            $table->id();

            $table->foreignId('siswa_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('mapel_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->date('tanggal');
            $table->time('jam');
            $table->unsignedInteger('durasi');                 // dalam menit
            $table->enum('status', ['scheduled', 'selesai', 'cancel'])
                ->default('scheduled');

            $table->softDeletes();
            $table->timestamps();

            $table->index(['siswa_id', 'mapel_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sesis');
    }
};
