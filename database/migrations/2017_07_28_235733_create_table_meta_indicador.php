<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMetaIndicador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_indicador', function (Blueprint $table) {
            $table->increments('meta_indicador_id');
        $table->integer('meta_id')->unsigned();
        $table->integer('indicador_id')->unsigned();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meta_indicador');
    }
}
