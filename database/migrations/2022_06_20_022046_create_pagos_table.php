<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

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
            $table->id();
            $table->dateTimeTz('fecha');
            

            $table->foreignId('id_celdas')
                ->cascadeOnupdate()
                ->nullOnDelete()
                ->nullable()
                ->constrained('celdas');

            $table->foreignId('id_vehiculos')
                ->cascadeOnupdate()
                ->nullOnDelete()
                ->nullable()
                ->constrained('vehiculos');

            $table->foreignId('id_tarifas')
                ->cascadeOnupdate()
                ->nullOnDelete()
                ->nullable()
                ->constrained('tarifas');

            $table->foreignId('id_users')
                ->cascadeOnupdate()
                ->nullOnDelete()
                ->nullable()
                ->constrained('users');

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
        Schema::dropIfExists('pagos');
    }
};
