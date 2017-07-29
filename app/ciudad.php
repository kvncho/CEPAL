<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ciudad extends Model
{
    public function pais()
    {
        return $this->belongsToMany('App\Preguntas',
            'encuestas_preguntas',
            'encuestas_id',
            'preguntas_id');
    }
}
