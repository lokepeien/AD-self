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
        Schema::create('notes', function (Blueprint $table) {
            $table->uuid('note_id')->primary();
            $table->string('title', 255);
            $table->string('file_path', 500);
            $table->boolean('visibility')->default(true); // TRUE = visible
            
            // This creates 'created_at' and 'updated_at'
            $table->timestamps(); 

            // --- FOREIGN KEYS ---

            // 1. Links to the 'topic' table
            $table->foreignUuid('topic_id')
                ->nullable() 
                ->constrained('topic', 'topic_id') // Links to topic(topic_id)
                ->nullOnDelete(); 

            // 2. Links to the 'users' table
            // This creates a 'created_by' column
            $table->foreignId('created_by')
                ->constrained('users') // Assumes a 'users' table with 'id'
                ->cascadeOnDelete(); // If the user is deleted, delete their notes
        });
    }
};
