<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progresos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('primer');
            $table->char('segundo');
            $table->char('tercero');
            $table->char('cuarto');
            $table->char('quinto');
            $table->char('sexto');
            $table->char('septimo');
            $table->char('octavo');
            $table->integer('iduser')->unsigned()->nullable()->unique();
            $table->foreign('iduser')->references('id')->on('users');
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
        Schema::dropIfExists('progresos');
    }
}
