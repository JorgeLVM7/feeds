<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromocionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('fecha');
            $table->string('hora_inicio');
            $table->string('hora_final');
            $table->string('path')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('rest_id')->unsigned();

            //Relation

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('rest_id')->references('id')->on('restaurantes');
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
        Schema::dropIfExists('promocion');
    }
}
