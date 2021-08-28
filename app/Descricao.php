<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descricao extends Model
{
    public function Categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
