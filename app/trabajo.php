<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trabajo extends Model
{
    public function expert()
    {
      return $this->belongsTo('App\expert');
    }
}
