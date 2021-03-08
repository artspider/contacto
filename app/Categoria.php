<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function subcategorias()
    {
        return $this->hasMany('App\subcategoria')->latest();
    }
}
