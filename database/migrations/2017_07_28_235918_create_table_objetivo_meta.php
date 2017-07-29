<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableObjetivoMeta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetivo_meta', function (Blueprint $table) {
            $table->increments('objetivo_meta_id');
            $table->integer('objetivo_id')->unsigned();
            $table->integer('meta_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objetivo_meta');
    }
}
