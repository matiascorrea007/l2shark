<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebCoinServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_coin_servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nicknamecolor');
            $table->integer('titlecolor');
            $table->integer('removekarma');
            $table->integer('pkreset');
            $table->integer('nickname');
            $table->integer('clanname');
            $table->integer('sex');
            $table->integer('unstuck');
            $table->integer('noblesse');
            $table->integer('hero');
            $table->integer('vip');

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
        Schema::drop('web_coin_servicios');
    }
}
