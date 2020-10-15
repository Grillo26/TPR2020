<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id('id_factura');
            $table->foreign('id_detalle')->refenrences('id_detalle')-> on('detalle_facturas');
            $table->date('fecha');
            $table->integer('precio_total');
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
            $table->foreign('id_rol')->references('id_rol')->on('rols');
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
        Schema::dropIfExists('facturas');
    }
}
