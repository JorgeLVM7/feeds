<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantesTable extends Migration
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
            $table->string('categoria');
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
            $table->string('foto')->nullable();
            $table->timestamps();
            $table->integer('users_id_user')->unsigned();
            $table->foreign('user_id_user')->references('id')->on('users');
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
        $table->dropForeign('users_id_user');
        $table->dropColumn('users_id_user');
    }
}
