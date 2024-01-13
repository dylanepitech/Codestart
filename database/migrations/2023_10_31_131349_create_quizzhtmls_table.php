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
        Schema::create('quizzhtmls', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("username");
            $table->boolean("question1")->default();
            $table->boolean("question2")->default();
            $table->boolean("question3")->default();
            $table->boolean("question4")->default();
            $table->boolean("question5")->default();
            $table->boolean("question6")->default();
            $table->boolean("question7")->default();
            $table->boolean("question8")->default();
            $table->boolean("question9")->default();
            $table->boolean("question10")->default();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzhtmls');
    }
};
