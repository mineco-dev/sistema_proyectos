<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'renglon', 'nombre'
    ];

    public function subcategorias()
    {
        return $this->hasMany(Subcategory::class);
    }

    public function insumos()
    {
        return $this->hasMany(Insumo::class);
    }
}
