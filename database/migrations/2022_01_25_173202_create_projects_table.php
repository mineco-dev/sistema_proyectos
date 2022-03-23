<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->foreignId('cooperation_id')->constrained();
            $table->foreignId('cooperation_type_id')->constrained();
            $table->text('origen');
            $table->foreignId('cooperante_id')->constrained();
            $table->foreignId('formalization_document_id')->constrained();
            $table->float('monto');
            $table->float('contrapartida');
            $table->float('monto_total');
            $table->foreignId('moneda_id')->constrained();
            $table->foreignId('resource_classification_id')->constrained();
            $table->text('objeto');
            $table->text('beneficiarios');
            $table->text('resumen');
            $table->text('resultados');
            $table->json('objetivo_id');
            $table->json('katun_id');
            $table->text('descripcion');
            $table->text('observaciones');
            $table->foreignId('unit_id')->constrained();
            $table->text('unidad_beneficiada');
            $table->foreignId('state_id')->constrained();
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
        Schema::dropIfExists('projects');
    }
}
