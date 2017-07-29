<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePreguntas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->increments('preguntas_id');
            $table->string('P1','1');
            $table->string('P2','1');
            $table->string('P3','1');
            $table->string('P4','1');
            $table->string('P5','12');
            $table->string('P6','45');
            $table->string('P7','45');
            $table->string('P8','80');
            $table->string('P9','320');
            $table->string('P10','320');
            $table->string('estado','2');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
}
