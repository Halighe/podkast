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
        Schema::create('activity_blocks', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['study', 'extracurricular', 'additional']); 
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('description')->nullable(); 
            $table->text('assignment_text')->nullable(); 
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_blocks');
    }
};
