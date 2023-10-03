<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\agency;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->id('agency_id');
            $table->string('name');
            $table->string('country');
            $table->string('type');
            $table->timestamps();
        });
        agency::create(['name'=>'hunnok','country'=>'Magyarorszag','type'=>'bevetes']);
        agency::create(['name'=>'hornok','country'=>'Horvathorszag','type'=>'bevetes']);
        agency::create(['name'=>'ornok','country'=>'Oroszorszag','type'=>'bevetes']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};
