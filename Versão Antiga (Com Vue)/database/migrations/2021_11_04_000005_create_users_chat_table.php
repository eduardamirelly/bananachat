<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersChatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_chat', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('isMuted');
            $table->boolean('isFixed');
            $table->string('srcWallpaper')->nullable();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('chat_id')->references('id')->on('chats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_chat');
    }
}
