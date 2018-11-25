<?php

namespace App\Models\itens;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $primaryKey = 'id';
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public $fillable = [
        'entry',
        'main',
        'dessert',
        'price',
        'created_at',
        'updated_at',
    ];
}