<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pedido';
    protected $casts = ['data' => 'date:Y-m-d'];
    protected $fillable = [
        'data',
        'status',
        'valor',
        'cliente_id'
    ];

    public static $storeRules = [
        'nome' => 'required|min:4',
        'data' => 'required|date|after_or_equal:today',
        'cliente_id' => 'required',
        'valor' => 'required|decimal:0,2'
    ];

    public static $updateRules = [
        'nome' => 'filled|min:4',
        'data' => 'filled|date|after_or_equal:today',
        'cliente_id' => 'filled',
        'valor' => 'filled|decimal:0,2'
    ];

    public function cliente() : BelongsTo {
        return $this->belongsTo(Cliente::class);
    }

}
