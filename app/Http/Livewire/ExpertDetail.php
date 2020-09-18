<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Notifications\newMsjToExpert;

use App\expert;
use App\tag;
use App\expert_tag;

class ExpertDetail extends Component
{

  public $nombre;
  public $telefono;
  public $profesion;
  public $especialidad;
  public $cedula;
  public $ciudad;
  public $estado;
  public $facebook;
  public $instagram;
  public $twitter;
  public $habilidades; //tags
  public $email;
  public $foto;
  public $foto_perfil;
  public $expert_id;

  public $tags;
  public $about; //descripcion personal y de lo que ofrece al empleador o empresa
  public $educacion;
  public $experiencia;

  public $expertId;

  public $mensaje;

  public function getExpertProperty()
  {
      return Expert::find($this->expertId);
  }

  public function mount($id)
  {
    logger('el id es: ');
    logger($id);
    $this->expertId = $id;

    $expert = Expert::find($id);
    $this->habilidades = $expert->tags;
    $this->educacion = $expert->titulos;
    $this->experiencia = $expert->trabajos;

    /* $this->nombre = $expert->nombre;
  $this->telefono;
  $this->profesion;
  $this->especialidad;
  $this->cedula;
  $this->ciudad;
  $this->estado;
  $this->facebook;
  $this->instagram;
  $this->twitter;
  $this->habilidades; //tags
  $this->email;
  $this->foto;
  $this->foto_perfil;
  $this->expert_id;

  $this->tags;
  $this->about; //descripcion personal y de lo que ofrece al empleador o empresa
  public $educacion;
  $this->experiencia; */

  }

  public function render()
  {
    return view('livewire.expert-detail');
  }

  public function sendMsgToExpert()
  {
    logger('Entraando a SenMsgToExpert.');

    $validatedData = $this->validate([
        'mensaje' => 'required|min:5',
    ]);

    $user = Auth::user();
    $expert = Expert::find($this->expertId);

    $msj = collect(["id" => $user->id, "name" => $user->name, "message" => $this->mensaje]);

    logger($msj);

    $expert->notify(new newMsjToExpert($msj));
    logger('saliendo de SenMsgToExpert');
  }
}
