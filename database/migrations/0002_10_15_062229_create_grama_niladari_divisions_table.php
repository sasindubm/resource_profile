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
        Schema::create('grama_niladari_divisions', function (Blueprint $table) {
            $table->string('gnd_code')->primary(); // GNDCode as primary key
            $table->string('gnd_name');
            $table->string('ds_code');
            $table->foreign('ds_code')->references('ds_code')->on('divisional_secretariats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grama_niladari_divisions');
    }
};
