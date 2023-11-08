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
        if(!Schema::hasTable('users')){
            Schema::create('users', function(Blueprint $table){
                $table->increments('id');
                $table->string('name', 32);
                $table->string('lastname', 32);
                $table->string('username', 32)->unique();
                $table->string('password', 255);
                $table->string('email', 128)->unique();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
