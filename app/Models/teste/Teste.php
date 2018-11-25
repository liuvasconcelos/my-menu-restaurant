<?php

namespace App\Models\teste;

use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    protected $table = 'testes';
    protected $primaryKey = 'id_teste';
    protected $dates = [
        'teste_criado_em',
        'teste_atualizado_em'
    ];
    const CREATED_AT = 'teste_criado_em';
    const UPDATED_AT = 'teste_atualizado_em';

    public $fillable = [
        'teste_1',
        'teste_2',
        'teste_3',
        'teste_4',
        'teste_criado_em',
        'teste_atualizado_em',
    ];



}
