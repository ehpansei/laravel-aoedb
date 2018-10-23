<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_user', function (Blueprint $table) {
            $table->integer('player_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('user_id')->references('id')->on('users');

            $table->primary(['player_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_user');
    }
}
