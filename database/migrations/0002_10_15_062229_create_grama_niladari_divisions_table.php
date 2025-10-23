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
            $table->string('gnd_uid')->primary();
            $table->string('gnd_code');
            $table->string('gnd_number');
            $table->string('gnd_name');
            $table->string('ds_id')->nullable();
            $table->foreign('ds_id')->references('ds_id')->on('divisional_secretariats')->onDelete('cascade');
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
