<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('games', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->integer('admin_id')->unsigned();
          $table->foreign('admin_id')->references('id')->on('users')
              ->onDelete('cascade');
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
