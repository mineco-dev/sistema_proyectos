<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo_sicoin','nombre','descripcion','subcategory_id','presentation_id'
    ];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    
    public function category()
    {
        return $this->subcategory->category->nombre;
    }


}
