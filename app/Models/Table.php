<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $table = 'tables';
    protected $primaryKey = 'id';
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public $fillable = [
        'status',
        'style',
        'created_at',
        'updated_at',
    ];
}
