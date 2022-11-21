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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('name');
            $table->string('model');
            $table->string('serie_number');
            $table->string('manufacturer');
            $table->string('ufsm_code');
            $table->string('laboratory_code');
            $table->string('ncm_code');
            $table->string('locker');
            $table->string('type')->nullable();
            $table->string('manual_link');
            $table->string('resources');
            $table->text('additional_information');
            $table->text('observation');
            $table->json('useful_links')->nullable();
            $table->string('image')->nullable();
            $table->boolean('active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment');
    }
};
