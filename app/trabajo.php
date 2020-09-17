<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trabajo extends Model
{

    protected $fillable = [
        'empresa',
        'puesto',
        'fecha',
        'expert_id',
      ];

    public function expert()
    {
      return $this->belongsTo('App\expert');
    }
}
