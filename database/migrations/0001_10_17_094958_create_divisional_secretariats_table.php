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
        Schema::create('divisional_secretariats', function (Blueprint $table) {
            $table->string('ds_code')->primary();
            $table->string('ds_name');
            $table->string('d_code');
            $table->foreign('d_code')->references('d_code')->on('districts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('divisional_secretariats');
    }
};
