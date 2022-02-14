<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','cooperation_id','cooperation_type_id','origen','cooperante_id','formalization_document_id','monto','contrapartida','monto_total','moneda_id',
        'resource_classification_id','objeto','beneficiarios',
        'resumen','resultados','objetivo_id','katun_id','descripcion','observaciones',
        'unit_id','unidad_beneficiada','state_id'
    ];

    public function cooperation()
    {
        return $this->belongsTo(Cooperation::class);
    }

    public function cooperationType()
    {
        return $this->belongsTo(CooperationType::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function cooperante()
    {
        return $this->belongsTo(Cooperante::class);
    }

    public function nameCorto()
    {
        return substr($this->name, 0, 30) . "...";
    }
}
