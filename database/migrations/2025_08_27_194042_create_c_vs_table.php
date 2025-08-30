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
        Schema::create('c_vs', function (Blueprint $table) {
            $table->id();
             $table->string('full_name');
        $table->string('email');
        $table->string('phone');
        $table->text('summary')->nullable();
        $table->text('education')->nullable();
        $table->text('experience')->nullable();
        $table->text('skills')->nullable();
        $table->string('template')->default('classic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_vs');
    }
};
