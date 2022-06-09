<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->text('placa');
            $table->biginteger('idtipovehiculofk')->unsigned();
            $table->time('ingreso');
            $table->text('estadoingreso');
            $table->time('salida');
            $table->text('estadosalida');
            $table->timestamps();

            $table->foreign('idtipovehiculofk')->references('id')->on('tipos')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
