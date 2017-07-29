<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class encuestas extends Model
{

    protected $table = 'encuestas';

    public function preguntas()
    {
         return $this->belongsToMany('App\Preguntas',
         'encuestas_preguntas',
          'encuestas_id',
          'preguntas_id');
    }
}
