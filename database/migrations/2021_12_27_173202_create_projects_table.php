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
            $table->string('name')->unique();
            $table->foreignId('cooperation_id')->constrained();
            $table->foreignId('cooperation_type_id')->constrained();
            $table->string('origen');
            $table->foreignId('cooperante_id')->constrained();
            $table->foreignId('formalization_document_id')->constrained();
            $table->float('monto');
            $table->foreignId('moneda_id')->constrained();
            $table->integer('contrapartida');
            $table->foreignId('resource_classification_id')->constrained();
            $table->string('objeto');
            $table->string('beneficiarios');
            $table->string('resumen');
            $table->string('resultados');
            $table->foreignId('objetivo_id')->constrained();
            $table->string('vinculacion');
            $table->string('observaciones');
            $table->foreignId('unit_id')->constrained();
            $table->string('unidad_beneficiada');
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
