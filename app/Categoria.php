<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function descricao(){
        return $this->hasMany(Descricao::class);
    }
}
