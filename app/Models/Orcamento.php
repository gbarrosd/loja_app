<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $table = 'orcamentos';
    protected $fillable = [
        'veiculo',
        'placa',
        'valor',
        'porcento',
        'valor_real',
        'numero',
        'situacao',
        'orcamento_id',
        'secretaria',
        'tipo',
    ];

    public function nota(){
        return $this->belongsTo(Nota::class, 'orcamento_id', 'id');
    }
}
