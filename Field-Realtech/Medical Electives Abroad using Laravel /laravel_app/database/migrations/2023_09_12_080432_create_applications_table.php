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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key to relate to users
            $table->string('fullName');
            $table->string('email');
            $table->string('phone');
            $table->string('university');
            $table->string('degree');
            $table->json('program');
            $table->integer('duration');
            $table->string('englishProficiency');
            $table->string('resume'); // File path to resume
            $table->string('transcripts'); // File path to transcripts
            $table->string('accommodation')->nullable();
            $table->enum('financialAid', ['yes', 'no'])->nullable();
            $table->text('additionalQuestions')->nullable();
            $table->boolean('agreeTerms');
            $table->string('status')->default('pending'); // Status column with default value 'pending'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};

