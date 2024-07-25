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
        Schema::create('recpies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('prep_time');
            $table->integer('cook_time');
            $table->longText('description');
            $table->longText('instruction');
            $table->text('nutrient');
            $table->string('image');
            $table->string('slug');

            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recpies');
    }
};
