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
        Schema::create('nom_nomina_definitiva', function (Blueprint $table) {
            $table->integer('REGISTRO')->autoIncrement();
            $table->date('FCH_CRE');
            $table->integer('ID_CONCEPTO');
            $table->foreign('ID_CONCEPTO')->references('ID_CONCEPTO')->on('nom_conceptos_nomina');
            $table->integer('ID_EMPLEADO');
            $table->foreign('ID_EMPLEADO')->references('ID_EMPLEADO')->on('nom_empleados');
            $table->string('VAL_NOMINA', 100)->nullable();
            $table->string('CANTIDAD', 100)->nullable();
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
        Schema::dropIfExists('nom_nomina_definitiva');
    }
};
