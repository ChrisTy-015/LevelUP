<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('course_sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mentor_id');
            $table->unsignedBigInteger('mentee_id');
            $table->unsignedBigInteger('skill_id');
            $table->dateTime('scheduled_at');
            $table->integer('duration');
            $table->enum('status', ['scheduled', 'completed', 'cancelled']);
            $table->timestamps();
        
            
        });
        
    }    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_sessions'); 
    }
};
