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
        Schema::create('nom_conceptos_nomina', function (Blueprint $table) {
            $table->integer('ID_CONCEPTO')->autoIncrement();
            $table->string('DESC_CONCEPTO', 100)->nullable();
            $table->string('COD_CONCEPTO', 100)->nullable();
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
        Schema::dropIfExists('nom_conceptos_nomina');
    }
};
