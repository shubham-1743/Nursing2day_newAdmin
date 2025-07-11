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
        Schema::create('question_bank', function (Blueprint $table) {
            $table->id();
            
            $table->string('class_name');
            $table->string('subject');
            $table->string('chapter')->nullable();
            $table->string('topic')->nullable();
    
            $table->enum('question_type', ['essay', 'long', 'short', 'very_short', 'fill_blank', 'mcq']);
            $table->integer('marks');
            $table->text('question');
    
            // For MCQ
            $table->string('option1')->nullable();
            $table->string('option2')->nullable();
            $table->string('option3')->nullable();
            $table->string('option4')->nullable();
            $table->string('option5')->nullable();
            $table->integer('correct_option')->nullable(); // 1 to 4
    
            // For Fill in the Blank
            $table->string('fill_answer')->nullable();
    
            // For essay/long/short answer
            $table->text('text_answer')->nullable();
    
            // Upload option
            $table->boolean('manual')->default(false);
            $table->string('excel_file')->nullable();
            $table->string('pdf_doc_file')->nullable();
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_bank');
    }
};
