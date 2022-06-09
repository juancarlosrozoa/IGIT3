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
        Schema::create('pagos', function (Blueprint $table) {
           
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->biginteger('idvehiculofk')->unsigned();
            $table->string('celda');
            $table->time('fecha');
            $table->timestamps();

            
            $table->foreign('idvehiculofk')->references('id')->on('vehiculos')->onDelete("cascade");
          

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
