<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CooperationType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
}
