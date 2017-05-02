<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->double('precio');
            $table->string('slug')->unique();
            $table->integer('web_producto_combo_id');
            $table->string('imagen');
            $table->string('filename'); 
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
        Schema::drop('web_productos');
    }
}
