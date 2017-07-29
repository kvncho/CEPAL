<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEncuestasPreguntas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas_preguntas', function (Blueprint $table) {
            $table->increments('encuestas_preguntas_id');
            $table->integer('encuestas_id')->unsigned();
            $table->integer('preguntas_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encuestas_preguntas');
    }
}
