<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('avatar')->default('grunt-logo.png');
            $table->enum('grupo', ['familia','amigos','trabajo']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voida
     */
    public function down()
    {
        Schema::drop('agendas');
    }
}
