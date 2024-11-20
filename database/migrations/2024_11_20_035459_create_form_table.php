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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',20);
            $table->string('last_name',20);
            $table->string('middle_name',20)->nullable();
            $table->date('birth_date');
            $table->string('email',255)->nullable();
            // $table->enum('country_code', ['+375', '+7']);
            $table->string('phone', 20); // (XXX) XXX-XX-XX
            $table->enum('marital_status', ['Холост/не замужем', 'Женат/замужем', 'В разводе', 'Вдовец/вдова'])->nullable(); 
            $table->text('about')->nullable(); // О себе: максимум 1000 символов
            $table->timestamps();
 
            // $table->checkRaw('CHAR_LENGTH(about) <= 1000');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
