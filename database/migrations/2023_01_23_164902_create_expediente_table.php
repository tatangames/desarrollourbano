<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expediente', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('exp');

            $table->string('solicitante', 150);
            $table->bigInteger('id_procesos')->unsigned();
            $table->bigInteger('id_estados')->unsigned();

            $table->dateTime('fecha');
            $table->string('mapa', 150)->nullable();
            $table->string('parcela', 150)->nullable();
            $table->string('correo_solicitante', 150)->nullable();
            $table->string('telefono', 25)->nullable();
            $table->decimal('derecho_cancelado', 10, 2)->nullable();
            $table->string('catastral', 150)->nullable();
            $table->string('direccion', 350)->nullable();

            $table->text('comentarios')->nullable();

            $table->foreign('id_procesos')->references('id')->on('procesos');
            $table->foreign('id_estados')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expediente');
    }
}
