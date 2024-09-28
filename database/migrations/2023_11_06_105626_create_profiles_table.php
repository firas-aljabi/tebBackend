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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('theme_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('isPersonal')->nullable();
            $table->string('jobTitle')->nullable();
            $table->string('businessName')->nullable();
            $table->string('MedicalRank')->nullable();
            $table->string('SelectedLanguage')->nullable();

            
            $table->string('SelectedLanguage')->nullable();
            $table->text('location')->nullable();
            $table->text('bio')->nullable();
            $table->string('cover')->nullable();
            $table->string('photo')->nullable();
            $table->string('bgColor')->nullable();
            $table->string('buttonColor')->nullable();
            $table->string('phoneNum')->nullable();
            $table->string('phoneNumSecondary')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('views')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
