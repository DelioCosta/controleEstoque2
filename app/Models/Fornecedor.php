<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'fornecedor';

    protected $fillable = [
        'nome',
        'cpf',
        'cnpj',
        'telefone',
        'email',
        'cep',
        'endereco',
        'numero',
        'bairro',
        'estado',
        'cidade',
        'complemento',
        'nome_contato',
    ];

    public static $storeRules = [
        'nome' => 'required|min:4',
    ];

    public static $updateRules = [
        'nome' => 'filled|min:4',
    ];
}
