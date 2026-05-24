<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('gurus', function (Blueprint $table) {

            $table->decimal('harga_les', 15, 2)
                ->default(0);

            $table->string('telepon')
                ->nullable();

            $table->string('rekening')
                ->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('gurus', function (Blueprint $table) {

            $table->dropColumn([
                'harga_les',
                'telepon',
                'rekening'
            ]);

        });
    }
};