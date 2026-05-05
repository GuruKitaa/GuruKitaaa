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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('siswa_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('guru_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->unsignedTinyInteger('nilai');              // 1–5
            $table->text('komentar')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->unique(['siswa_id', 'guru_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
