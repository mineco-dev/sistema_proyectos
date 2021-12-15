<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_ingreso','bodega_id','dependency_id','serie_factura','no_factura','fecha_factura','fecha_sistema','observaciones'
    ];
}
