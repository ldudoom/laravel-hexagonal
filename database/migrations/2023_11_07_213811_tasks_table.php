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
        if(!Schema::hasTable('tasks')){
            Schema::create('tasks', function(Blueprint $table){
                $table->increments('id');
                $table->string('task', 128);
                $table->text('description')->nullable();
                $table->integer('status')->default(0);
                $table->unsignedInteger('user_id');
                $table->timestamps();
                $table->foreign('user_id')
                      ->references('id')
                      ->on('users')
                      ->onUpdate('cascade')
                      ->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
