<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo', 'nombre','category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function insumos()
    {
        return $this->hasMany(Insumo::class);
    }
}
