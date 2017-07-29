<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pais', function (Blueprint $table) {
            $table->increments('pais_id');
            $table->integer('ciudad_id')->unsigned();
            $table->string('abrepais_ES','50');
            $table->string('abrepais_EN','50');
            $table->string('nombre_pais','220');
            $table->string('imagen_pais','250');
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
        Schema::dropIfExists('pais');
    }
}
