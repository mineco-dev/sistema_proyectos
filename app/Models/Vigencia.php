<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vigencia extends Model
{
    use HasFactory;

    protected $casts = [
        'inicio' => 'date:Y-m-d',
        'fin' => 'date:Y-m-d'
    ];
}
