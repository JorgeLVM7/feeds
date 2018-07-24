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
            $table->string('sitio_web')->nullable();
            $table->integer('idcategoria1');
            $table->integer('idcategoria2')->nullable();
            $table->integer('idcategoria3')->nullable();
            $table->string('email')->unique();
            $table->string('calle');
            $table->integer('no_int')->nullable();
            $table->integer('no_ext')->nullable();
            $table->string('colonia');
            $table->integer('codigo_postal');
            $table->string('referencia');
            $table->bigInteger('telefono');
            $table->string('horario');

            $table->string('hora1');
            $table->string('hora2');
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
