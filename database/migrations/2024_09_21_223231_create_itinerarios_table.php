<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itinerarios', function (Blueprint $table) {
            $table->id('codigo_itinerario');
            $table->datetime('fecha_hora_salida');
            $table->datetime('fecha_hora_llegada');
            $table->bigInteger('codigo_origen')->unsigned();
            $table->foreign('codigo_origen')->references('codigo_origen')->on('origen');

            $table->bigInteger('codigo_destino')->unsigned();
            $table->foreign('codigo_destino')->references('codigo_destino')->on('destinos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itinerarios');
    }
};
