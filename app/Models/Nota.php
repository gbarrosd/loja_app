<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'notas';
    protected $fillable = ['numero_nota', 'orcamento_id', 'situacao'];

    public function orcamento() {
        return $this->hasOne(Orcamento::class, 'orcamento_id', 'id');
    }
}
