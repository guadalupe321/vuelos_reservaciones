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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id('codigo_vuelo');
            $table->string('nombre', 100);
            $table->string('aerolinea', 100);
            $table->bigInteger('codigo_itinerario')->unsigned();
            $table->foreign('codigo_itinerario')->references('codigo_itinerario')->on('itinerarios');
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
        Schema::dropIfExists('vuelos');
    }
};
