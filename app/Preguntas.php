<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preguntas extends Model
{


    protected $fillable = [
        'preguntas_id', 'P1', 'P2','P3','P4',
        'P5','P6','P7','P8','P9','P10','estado'
    ];

    public function encuestas()
    {
        return $this->belongsToMany('App\Encuestas',
            'encuestas_preguntas',
            'preguntas_id',
            'encuestas_id');

    }
}
