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
        Schema::create('reg_solicitudes_ingresos', function (Blueprint $table) {
            $table->integer('ID_SOLICITUD')->autoIncrement();
            $table->string('DOCUMENTO', 15)->unique();
            $table->string('APELLIDOS', 50)->nullable();
            $table->string('NOMBRE', 50)->nullable();
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
        Schema::dropIfExists('reg_solicitudes_ingresos');
    }
};
