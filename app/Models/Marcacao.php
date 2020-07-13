<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marcacao extends Model
{
    protected $table = "api_marcacao";

    protected $fillable = [
        
        'leitura_mes',
        'dia',
        'hora',

    ];

    public function marcacao()
    {
        return $this->belongsTo('App\ClienteEndereco');
    }
}
