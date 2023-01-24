<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocResolucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_resoluciones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_resoluciones')->unsigned();
            $table->string('url', 100);

            $table->foreign('id_resoluciones')->references('id')->on('resoluciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doc_resoluciones');
    }
}
