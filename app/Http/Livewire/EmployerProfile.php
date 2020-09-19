<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\newMsjToExpert;

use App\employer;

class EmployerProfile extends Component
{

  use WithFileUploads;
  public $employer;
  public $nombre;
  public $telefono;
  public $ciudad;
  public $estado;
  public $email;
  public $foto;
  public $foto_perfil;
  public $employer_id;

  public function mount()
  {
    logger('En el mount del Employer Profile');
    $user = Auth::user();
    $this->employer = $user->usable;
    logger('Employer: ' . $this->employer);
    $this->employer_id = $this->employer->id;

    $this->nombre = $this->employer->nombre;
    $this->email = $user->email;
    $wasUpdated =  $this->employer->updated_at->gt($this->employer->created_at);

    if($wasUpdated){
      logger('Employer ha sido actualizado');
      $this->telefono = $this->employer->telefono;
      $this->ciudad = $this->employer->ciudad;
      $this->estado = $this->employer->estado;
      $this->foto_perfil = $this->employer->url_image;
    }else{
      logger('Employer no ha sido actualizado');
      $this->foto_perfil = "fotos/no-profile-pic.jpg";
    }
  }

  public function render()
  {
    return view('livewire.employer-profile');
  }

  public function contactUpdate()
  {

    logger('En el Employer contactUpdate');

    $user = Auth::user();
    $employer = $user->usable;

    if( $this->foto_perfil == $employer->url_image)
    {
      logger(  "Es la misma foto" );
      $data = $this->validate([
        'nombre' => 'required|min:7',
        'telefono' => 'required|min:10',
        'ciudad' => 'required',
        'estado' => 'required|max:3',
      ]);
    }else{
      $data = $this->validate([
        'nombre' => 'required|min:7',
        'telefono' => 'required|min:10',
        'ciudad' => 'required',
        'estado' => 'required|max:3',
        'foto_perfil' => 'image|max:1024',
      ]);

      $foto_subida = $this->foto_perfil->store('fotos','public');

      logger('El archivo es 1: ');
      logger( $foto_subida);
      $foto_subida = str_replace("public", "storage", $foto_subida);
      logger('El archivo es 2: ');
      logger( $foto_subida);

      $employer->url_image = $foto_subida;
      $this->foto_perfil = $foto_subida;
    }

    $employer->nombre = $this->nombre;
    $employer->telefono = $this->telefono;
    $employer->ciudad = $this->ciudad;
    $employer->estado = $this->estado;

    $employer->save();

    logger('Datos del employer: ');
    logger($employer);
    logger('Saliendo el contactUpdate');
    session()->flash('message-contactUpdate', 'Se actualizaron tus datos');

  }

  public function closeWindow()
  {
    session()->forget('message-contactUpdate');
    return view('livewire.expert-profile');
  }
}
