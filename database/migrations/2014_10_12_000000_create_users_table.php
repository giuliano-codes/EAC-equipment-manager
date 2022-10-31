<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('alternative_email')->nullable();
            $table->string('google_id');
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('first_phone')->nullable();
            $table->string('second_phone')->nullable();
            $table->string('professor_adviser')->nullable();
            $table->string('course')->nullable();
            $table->string('project_research_area')->nullable();
            $table->boolean('scholarship')->default(false);
            $table->foreignId('current_team_id')->nullable();
            $table->string('avatar', 2048)->nullable();
            $table->boolean('active')->default(true);
            $table->boolean('accept_terms_and_privacy_policy')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
