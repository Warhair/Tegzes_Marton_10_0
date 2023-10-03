<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\participates;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('participates', function (Blueprint $table) {
            $table->id('participate_id');
            $table->boolean('present');
            $table->foreignId('event_id')->references('event_id')->on('events');
            $table->foreignId('user_id')->references('id')->on('users');

            $table->timestamps();
        });
        participates::create(['present'=>true,'event_id'=>1,'user_id'=>1]);
        participates::create(['present'=>true,'event_id'=>2,'user_id'=>1]);
        participates::create(['present'=>true,'event_id'=>1,'user_id'=>2]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participates');
    }
};
