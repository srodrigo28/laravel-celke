<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    use HasFactory;

    // nome da tabela
    protected $table = 'contas';

    // Atributos da tabela
    protected $fillable = ['nome', 'valor', 'vencimento'];
}
