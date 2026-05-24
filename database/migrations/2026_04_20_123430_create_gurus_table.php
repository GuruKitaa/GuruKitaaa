<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
             $table->id();
            $table->foreignId('user_id')
          ->constrained()
          ->onDelete('cascade');

        $table->text('bio')->nullable();
        $table->string('keahlian');
        $table->float('rating_avg')->default(0);
        $table->decimal('saldo', 15,2)->default(0);
        $table->softDeletes();
        $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gurus');
    }
};
