<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUserIdToRestaurantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurantes', function (Blueprint $table) {



            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('sitio_web');
            $table->integer('idcategoria1');
            $table->integer('idcategoria2');
            $table->integer('idcategoria3');
            $table->string('email')->unique();
            $table->string('calle');
            $table->integer('no_int');
            $table->integer('no_ext');
            $table->string('colonia');
            $table->integer('codigo_postal');
            $table->string('referencia');
            $table->integer('telefono');
            $table->string('horario');
            $table->string('latitud');
            $table->string('longitud');
            $table->string('RFC');
            $table->string('path')->nullable();

            $table->integer('user_id')->unsigned();

            //Relation

            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('restaurantes');

    }
}
