<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNivelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('niveles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nivel');
            $table->string('periodo');
            $table->string('modo');
            $table->integer('idprofesor')->unsigned()->nullable();
            $table->foreign('idprofesor')->references('id')->on('profes');
            $table->integer('idaula')->unsigned()->nullable();
            $table->foreign('idaula')->references('id')->on('aulas');
            $table->integer('idlibro')->unsigned()->nullable();
            $table->foreign('idlibro')->references('id')->on('libros');
            $table->datetime('fechainicio');
            $table->datetime('fechafin');
            $table->time('desde');
            $table->time('hasta');
            $table->integer('cupos');
            $table->double('costo', 8, 2);
            $table->char('estado');
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
        Schema::dropIfExists('niveles');
    }
}
