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
        Schema::create('vuelos_reservas', function (Blueprint $table) {
            $table->id('codigo_vr');
            $table->bigInteger('codigo_vuelo')->unsigned();
            $table->foreign('codigo_vuelo')->references('codigo_vuelo')->on('vuelos');

            $table->bigInteger('codigo_reserva')->unsigned();
            $table->foreign('codigo_reserva')->references('codigo_reserva')->on('reservas');
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
        Schema::dropIfExists('vuelos_reservas');
    }
};
