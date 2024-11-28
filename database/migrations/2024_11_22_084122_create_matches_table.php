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
        Schema::create('matches', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->foreignId('team1_id')->unsigned();
            $table->foreignId('team2_id')->unsigned();
            $table->foreignId('referee_id')->unsigned();
            $table->integer('team1_score')->unsigned();
            $table->integer('team2_score')->unsigned();
            $table->text('field');
            $table->text('time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_matches');
    }
};
