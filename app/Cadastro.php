<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $fillable = [
        'nome',
        'senha',
        'email', 
    ];
    
    public $timestamps = false;
    
}
