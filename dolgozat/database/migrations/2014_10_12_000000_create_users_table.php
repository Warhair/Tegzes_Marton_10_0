<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('vip');
            $table->rememberToken();
            $table->timestamps();
        });
        User::create(['name' => 'Ádám', 'email'=> 'diak1@gmail.com','password'=>'123','vip'=>true]);
        User::create(['name' => 'Laci', 'email'=> 'diak2@gmail.com','password'=>'123','vip'=>false]);
        User::create(['name' => 'Sanyi', 'email'=> 'diak3@gmail.com','password'=>'123','vip'=>false]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
