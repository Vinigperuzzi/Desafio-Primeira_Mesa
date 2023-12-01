<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'CEP',
        'Rua',
        'Numero',
        'Complemento',
        'Bairro',
        'Cidade',
        'Estado',
        'Nota'
    ];
}
