<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chips extends Model
{
    use HasFactory;

    protected $table = 'chips';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'quantidade',
        'peso',
        'sabor',
        'fornecedor',
        'validade',
    ];
}
