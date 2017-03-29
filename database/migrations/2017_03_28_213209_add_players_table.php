<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPlayersTable extends Migration
{

    public function up()
    {
      Schema::create('players', function (Blueprint $table){
        $table->increments('id');
        $table->string('first');
        $table->string('last');
        $table->integer('gamesPlayed');
        $table->integer('avgMinutes');
        $table->integer('ppg');
        $table->integer('rpg');
        $table->integer('apg');
        $table->integer('spg');
        $table->integer('bpg');
        $table->integer('tbg');
        $table->float('fgPercent');
        $table->float('ftPercent');
        $table->float('tpPercent');
      });

    }


    public function down()
    {
      Schema::dropIfExists('players');
    }
}
