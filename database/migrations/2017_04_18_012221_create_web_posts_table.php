<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('portada');
            $table->string('titulo');
            $table->string('descripcioncorta', 1000);
            $table->string('descripcionlarga',10000);
            $table->integer('user_id');
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
        Schema::drop('web_posts');
    }
}
