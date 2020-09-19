<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class employer extends Model
{
    use Notifiable;

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
