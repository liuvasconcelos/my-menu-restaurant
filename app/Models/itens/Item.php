<?php

namespace App\Models\itens;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'id';
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public $fillable = [
        'name',
        'description',
        'type',
        'price',
        'created_at',
        'updated_at',
    ];
}
