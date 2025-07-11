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
        Schema::create('paper_histories', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->nullable(); 
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('paper_name');
            $table->string('class'); 
            $table->enum('payment_flow', ['online', 'wallet', 'cash'])->default('online'); 
            $table->integer('download_quantity')->default(0);
            $table->decimal('net_payment', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paper_histories');
    }
};
