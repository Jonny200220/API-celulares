<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celular extends Model
{
    use HasFactory;
    protected $fillable = ['no_serie','sistema_operativo','ram','procesador','marca_id','color'];
}
