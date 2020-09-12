<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class titulo extends Model
{

  protected $fillable = [
    'escuela',
    'carrera',
    'fecha_terminacion',
    'sigue_estudiando',
    'expert_id',
  ];

  public function expert()
  {
    return $this->belongsTo('App\expert');
  }
}
