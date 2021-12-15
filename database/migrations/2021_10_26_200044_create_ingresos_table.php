<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id();
            $table->string('no_ingreso')->unique();
            $table->foreignId('bodega_id')->constrained();
            $table->foreignId('dependency_id')->constrained();
            $table->string('serie_factura');
            $table->string('no_factura');
            $table->date('fecha_factura');
            $table->date('fecha_sistema');
            $table->text('observaciones');
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
        Schema::dropIfExists('ingresos');
    }
}
