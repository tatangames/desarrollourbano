<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResolucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resoluciones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_exp')->unsigned();

            $table->bigInteger('num_res');
            $table->date('fecha_resolucion');

            $table->decimal('monto', 7, 2)->nullable();
            $table->date('fecha')->nullable();
            $table->string('recibe', 150)->nullable();

            $table->foreign('id_exp')->references('id')->on('expediente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resoluciones');
    }
}
