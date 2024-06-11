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
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->text('user_name');
            $table->string('email')->nullable(false); // Поле email обов'язкове
            $table->text('comment')->nullable();  // Поле comment необов'язкове
            $table->timestamps();  // Додавання timestamps

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
