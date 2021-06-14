<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresas';
    public $timestamps = true;

    protected $casts = [
        'aluguel' => 'float'
    ];

    protected $fillable = [
        'nome_empresa',
        'local',
        'aluguel',
        'created_at'
    ];


}
