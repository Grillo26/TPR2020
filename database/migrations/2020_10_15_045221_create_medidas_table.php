<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medidas', function (Blueprint $table) {
            $table->id('id_medida');
            $table->string('contorno_cintura');
            $table->string('contorno_cadera');
            $table->string('contorno_busto');
            $table->string('contorno_cisa');
            $table->string('ancho_hombro');
            $table->string('ancho_espalda');
            $table->string('talla_delantera');
            $table->string('talla_espalda');
            $table->string('largo_manga');
            $table->string('puño');
            $table->string('largo_total');
            $table->string('escote');
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
        Schema::dropIfExists('medidas');
    }
}
