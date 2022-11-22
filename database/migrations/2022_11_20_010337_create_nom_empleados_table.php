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
        Schema::create('nom_empleados', function (Blueprint $table) {
            $table->integer('ID_EMPLEADO')->autoIncrement();
            $table->integer('ID_SOLICITUD');
            $table->foreign('ID_SOLICITUD')->references('ID_SOLICITUD')->on('reg_solicitudes_ingresos');
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
        Schema::dropIfExists('nom_empleados');
    }
};
