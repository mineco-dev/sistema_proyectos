<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','cooperation_id','cooperation_type_id','origen','cooperante_id','formalization_document_id','monto','moneda_id',
        'contrapartida','resource_classification_id','objeto','beneficiarios',
        'resumen','resultados','objetivo_id','vinculacion','observaciones',
        'unit_id','unidad_beneficiada'
    ];
}
