<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "api_cliente";

    protected $fillable = [
        
        'nome',
        'cpf',
        'email',
        'telefone',

    ];

    public function clienteEndereco()
    {
        return $this->hasMany('App\ClienteEndereco');
    }

}
