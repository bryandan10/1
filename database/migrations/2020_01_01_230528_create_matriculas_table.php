<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idnivel')->unsigned()->nullable();
            $table->foreign('idnivel')->references('id')->on('niveles');
            $table->integer('iduser')->unsigned()->nullable();
            $table->foreign('iduser')->references('id')->on('users');
            $table->integer('idlibro')->unsigned()->nullable();
            $table->foreign('idlibro')->references('id')->on('libros');
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
        Schema::dropIfExists('matriculas');
    }
}
