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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id('codigo_reserva');
            $table->Integer('numero_asiento');
            $table->string('politica', 100);
            $table->bigInteger('codigo_clase')->unsigned();
            $table->foreign('codigo_clase')->references('codigo_clase')->on('clase');

            $table->bigInteger('codigo_pasajero')->unsigned();
            $table->foreign('codigo_pasajero')->references('codigo_pasajero')->on('pasajeros');

            $table->bigInteger('codigo_equipaje')->unsigned();
            $table->foreign('codigo_equipaje')->references('codigo_equipaje')->on('equipajes');

            $table->bigInteger('codigo_pago')->unsigned();
            $table->foreign('codigo_pago')->references('codigo_pago')->on('pagos');
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
        Schema::dropIfExists('reservas');
    }
};
