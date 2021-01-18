<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('idmatricula')->unsigned()->nullable();
            $table->foreign('idmatricula')->references('id')->on('matriculas');
            $table->integer('numero');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('cedula');
            $table->integer('celular');
            $table->string('direccion');
            $table->datetime('fecha');
            $table->string('compra1');
            $table->string('compra2')->nullable();
            $table->string('subtotal');
            $table->string('total');
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
