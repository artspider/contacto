<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expert extends Model
{
    //
    protected $fillable = [
      'nombre', 'paterno', 'materno', 'telefono', 'profesion', 'especialidad', 'cedula', 'universidad', 'ciudad', 'estado', 'facebook', 'instagram', 'twitter', 'habilidades', 'email', 'user_id',
  ];

  public function orders()
    {
        return $this->hasMany('App\order');
    }

    public function tags()
    {
        return $this->belongsToMany('App\tag', 'expert_tag')->withTimestamps();
    }

    public function membersihps()
    {
        return $this->hasOne('App\membership');
    }

    public function titulos()
    {
      return $this->hasMany('App\titulo');
    }

    public function trabajos()
    {
      return $this->hasMany('App\trabajo');
    }

    public function users()
    {
      return $this->morphOne('App\User', 'usable');
    }

    public function scopeCiudad($query, $ciudad)
    {
      if($ciudad)
        return $query->where('ciudad', 'LIKE', "%$ciudad%");
    }
}