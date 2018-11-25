<?php

namespace App\Models\itens;

use Illuminate\Database\Eloquent\Model;

class ItensType extends Model
{
    protected $table = 'itens_types';
    protected $primaryKey = 'id';
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public $fillable = [
        'type',
        'description',
        'created_at',
        'updated_at',
    ];
}
