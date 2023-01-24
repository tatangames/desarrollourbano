<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotosBitacoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos_bitacora', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_bitacora')->unsigned();
            $table->string('url', 100);

            $table->foreign('id_bitacora')->references('id')->on('bitacora');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotos_bitacora');
    }
}
