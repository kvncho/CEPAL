<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEncuestas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->integer('encuestas_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->integer('pais_id')->unsigned();
            $table->datetime('fecha');
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
        Schema::dropIfExists('encuestas');
    }
}
