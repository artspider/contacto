<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class expert extends Model
{
    use Notifiable;

    //
    protected $fillable = [
      'nombre', 'paterno', 'materno', 'telefono', 'profesion', 'especialidad', 'cedula', 'universidad', 'ciudad', 'estado', 'facebook', 'instagram', 'twitter', 'habilidades', 'email', 'user_id',
  ];

  public function orders()
    {
        return $this->hasMany('App\order')->latest();
    }

    public function tags()
    {
        return $this->belongsToMany('App\tag', 'expert_tag')->withTimestamps()->orderBy('name');
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

    public function scopeProfesion($query, $profesion)
    {
      if($profesion)
        return $query->where('profesion', 'LIKE', "%$profesion%")
                   ->orWhere('especialidad', 'LIKE', "%$profesion%");
    }

    public function scopeCiudad($query, $ciudad)
    {
      if($ciudad)
        return $query->Where('ciudad', 'LIKE', "%$ciudad%");
    }
}
