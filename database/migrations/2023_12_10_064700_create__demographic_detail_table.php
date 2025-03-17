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
        Schema::create('demographic_detail', function (Blueprint $table) {
            $table->id();
            $table->string('demographic_detail');
            $table->string('demographic_detail_ar');
            $table->foreignId('demographic_id')->constrained('demographic')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_demographic_detail');
    }
};
