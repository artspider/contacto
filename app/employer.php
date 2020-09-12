<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employer extends Model
{

  protected $fillable = [
    'nombre', 'paterno', 'materno', 'ciudad', 'estado', 'telefono',
  ];
    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function users()
    {
      return $this->morphOne('App\User', 'usable');
    }
}
