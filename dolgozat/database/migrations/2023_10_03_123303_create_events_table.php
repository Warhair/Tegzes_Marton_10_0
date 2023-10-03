<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\event;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->time('date');
            $table->foreignId('agency_id')->references('agency_id')->on('agencies');
            $table->integer('number')->nullable();
            $table->timestamps();
        });
        event::create(['date'=>2020,'agency_id'=>1,'number'=>2]);
        event::create(['date'=>2019,'agency_id'=>1,'number'=>3]);
        event::create(['date'=>2017,'agency_id'=>1,'number'=>4]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
