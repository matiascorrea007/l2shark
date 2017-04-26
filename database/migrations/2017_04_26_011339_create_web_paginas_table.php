<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebPaginasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_paginas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descargas', 2500);
            $table->string('reglas', 2500);
            $table->string('donaciones', 2500);
            $table->string('soporte', 2500);
            $table->string('informacion', 2500);
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
        Schema::drop('web_paginas');
    }
}
