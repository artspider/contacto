<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategoria extends Model
{
    protected $fillable = [
        'name', 'categoria_id'
    ];

    public function tags()
    {
        return $this->belongsToMany('App\tag', 'subcategoria_tag')->withTimestamps()->orderBy('name');
    }

    public function categorias()
    {
        return $this->belongsTo('App\categoria');
    }
}
