<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClienteEndereco extends Model
{
    protected $table = "api_cliente_endereco";

    protected $fillable = [
        
        'cep',
        'rua',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'num_hidro',
        'tipoHidrometro',
        'concessionaria',
    
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function enderecoMarcacao()
    {
        return $this->hasMany('App\Marcacao');
    }


}
