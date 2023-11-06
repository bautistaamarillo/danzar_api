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
        Schema::create('item_students', function (Blueprint $table) {
            
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('student_id');
            $table->primary(['item_id' , 'student_id']);
            $table->boolean('active');
            $table->timestamps();

        });  
    }   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_students');
    }
};
