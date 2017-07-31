<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pais extends Model
{
    public function ciudad()
    {
        return $this->belongsToMany('App\Preguntas',
            'encuestas_preguntas',
            'encuestas_id',
            'preguntas_id');
    }
}
