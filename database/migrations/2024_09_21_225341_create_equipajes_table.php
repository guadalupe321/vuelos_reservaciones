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
        Schema::create('equipajes', function (Blueprint $table) {
            $table->id('codigo_equipaje');
            $table->string('tipo_equipaje', 100);
            $table->decimal('peso', 8, 2);
            $table->bigInteger('codigo_precio')->unsigned();
            $table->foreign('codigo_precio')->references('codigo_precio')->on('precio_equipaje');
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
        Schema::dropIfExists('equipajes');
    }
};
