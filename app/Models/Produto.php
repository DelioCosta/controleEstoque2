<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'produto';
    protected $fillable = [
        'descricao',
        'referencia',
        'fabricante',
        'marca',
        'obs',
        'unidade',
        'valor_compra',
        'valor_venda',
        'estoque_minimo',
    ];

    public static $storeRules = [
        'descricao' => 'required|min:4',
        'valor_compra' => 'decimal:0,2',
        'valor_venda' => 'decimal:0,2'
    ];

    public static $updateRules = [
        'descricao' => 'filled|min:4',
        'valor_compra' => 'decimal:0,2',
        'valor_venda' => 'decimal:0,2'
    ];

}
