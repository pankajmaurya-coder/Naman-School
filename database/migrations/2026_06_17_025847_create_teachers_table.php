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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
    $table->string('employee_id')->unique();
    $table->string('phone', 15)->nullable();
    $table->enum('gender', ['male', 'female', 'other'])->nullable();
    $table->string('qualification')->nullable();
    $table->date('joining_date')->nullable();
    $table->text('address')->nullable();

    $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
