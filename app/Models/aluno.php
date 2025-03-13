<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aluno extends Model
{
    use HasFactory;

    protected $fillable = [

        'email',
        'cpf',
        'rm',
        'numero_da_escola',
        'senha'
    ];
}
