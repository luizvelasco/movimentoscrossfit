<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moviment extends Model
{
    use HasFactory;

    // Tudo que está sendo enviado pelo post pode ser alterado sem restrição
    protected $guarded = [];
}
