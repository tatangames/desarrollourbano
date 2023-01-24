<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocExpedienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_expediente', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_expediente')->unsigned();
            $table->string('url', 100);

            $table->foreign('id_expediente')->references('id')->on('expediente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doc_expediente');
    }
}
