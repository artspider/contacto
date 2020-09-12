<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

use App\expert;
use App\tag;
use App\expert_tag;
use App\titulo;
use App\trabajo;

class ExpertProfile extends Component
{

  use WithFileUploads;
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
  public $expert_id;

  public $tags;
  public $about; //descripcion personal y de lo que ofrece al empleador o empresa
  public $educacion;
  public $experiencia;

  protected $listeners = ['refreshComponent' => 'actualizaCarreras'];

  public function render()
  {
    return view('livewire.expert-profile');
  }

  public function mount()
  {
    logger('En el mount del expert');
    $user = Auth::user();
    logger("usuario");
    logger($user);

    $expert = $user->usable;
    logger('Experto');
    logger($expert);
    $this->expert_id = $expert->id;

    $habilidades = $expert->tags;
    logger('tags');
    logger($habilidades);

    $estudios = $expert->titulos;
    $trabajos = $expert->trabajos;

    $this->email = $expert->email;
    $wasUpdated =  $expert->updated_at->gt($expert->created_at);

    if($wasUpdated){

      logger('ha sido actualizado');

      $this->nombre = $expert->nombre;
      $this->telefono = $expert->telefono;
      $this->profesion = $expert->profesion;
      $this->especialidad = $expert->especialidad;
      $this->cedula = $expert->cedula;
      $this->ciudad = $expert->ciudad;
      $this->estado = $expert->estado;
      $this->facebook = $expert->facebook;
      $this->instagram = $expert->instagram;
      $this->twitter = $expert->twitter;
      $this->habilidades = $habilidades;
      $this->about = $expert->habilidades;
      $this->foto = $expert->url_image;

      $this->educacion = $estudios;
      $this->experiencia = $trabajos;
      logger($expert);
    }else{
      logger('no ha sido actualizado');
      $this->nombre = $user->name;
      $this->paterno = "sin datos";
      $this->materno = "sin datos";
      $this->telefono = "0000000000";
      $this->profesion = "sin datos";
      $this->especialidad = "sin datos";
      $this->cedula = "sin datos";
      $this->educacion = [];
      $this->ciudad = "sin datos";
      $this->estado = "npi";
      $this->facebook = "sin datos";
      $this->instagram = "sin datos";
      $this->twitter = "sin datos";
      $this->habilidades = null;
      $this->aterminacion = "0000";
      $this->sigue_estdiando = "0";
      $this->foto = "/img/avatar1.png";

      session()->flash('message', 'No has actualizado tus datos. Hacerlo te ayudará a ser contratado');
      logger($user);
    }

    logger($this->educacion);
    logger('Saliendo del mount');

  }

  public function actualizaCarreras()
  {
    logger('En actualizaCarreras');
    $user = Auth::user();
    $expert = $user->usable;
    $this->educacion = $expert->titulos;
    return view('livewire.expert-profile');
  }

  public function aboutUpdate()
  {
    logger('En el aboutUpdate');

    $user = Auth::user();
    $expert = $user->usable;

    $data = $this->validate([
      'nombre' => 'required|min:7',
      'profesion' => 'required|min:7',
      'especialidad' => 'required|min:7',
      'about' => 'required|min:10',
      'foto' => 'image|max:1024',
    ]);

    $user->name = $this->nombre;
    $user->save();

    $expert->nombre = $this->nombre;
    $expert->profesion = $this->profesion;
    $expert->especialidad = $this->especialidad;
    $expert->habilidades = $this->about;
    /* $expert->url_image = '/img/' . $this->foto; */
    logger('El archivo es: ');
    logger($this->foto);
    $expert->save();

    logger('Saliendo del aboutUpdate');
    session()->flash('message-aboutUpdate', 'Se actualizaron tus datos');

  }

  public function contactUpdate()
  {

    logger('En el contactUpdate');

    $user = Auth::user();
    $expert = $user->usable;

    $data = $this->validate([
      'telefono' => 'required|min:10',
      'ciudad' => 'required',
      'estado' => 'required|max:3',
    ]);

    $expert->telefono = $this->telefono;
    $expert->ciudad = $this->ciudad;
    $expert->estado = $this->estado;
    $expert->save();

    logger('Datos del experto: ');
    logger($expert);
    logger('Saliendo el contactUpdate');
    session()->flash('message-contactUpdate', 'Se actualizaron tus datos');
  }

  public function addTags()
  {
    logger('En addTags');
    $user = Auth::user();
    $expert = $user->usable;

    $all_tags = explode(",", $this->tags);


      logger('tag con contenido');

      foreach($all_tags as $one_tag)
      {
        $one_tag = ltrim($one_tag);
        if($one_tag != '')
        {
          $tag = Tag::where('name',$one_tag)->first();

        if(!$tag)
        {
          $tag = Tag::create([
            'name' => $one_tag,
            'created_at' => now(),
            'updated_at' => now(),
          ]);
        }

        $expert_tag = Expert_tag::create([
          'expert_id' => $expert->id,
          'tag_id' => $tag->id,
          'created_at' => now(),
          'updated_at' => now(),
        ]);
        }
      }

    session()->flash('message-contactUpdate', 'Se actualizaron tus datos');

    $this->habilidades = $expert->tags;
    logger($all_tags);
    $this->reset('tags');
    logger('Saliendo de addTags');
    session()->flash('message-addTags', 'Se actualizaron tus datos');
  }

  public function educacionUpdate()
  {
    logger('en el educacion Update');
    $user = Auth::user();
    $expert = $user->usable;

    if($this->sigue_estdiando){
      logger('Sigue estudiando');
    }else{
      logger('No sigue estudiando');
    }

    $data = $this->validate([
      'profesion' => 'required|min:7',
      'especialidad' => 'required|min:7',
      'educacion' => 'required|min:7',
      'aterminacion' => 'required|digits:4',
    ]);

    $expert->profesion = $this->profesion;
    $expert->especialidad = $this->especialidad;
    $expert->educacion = $this->educacion;
    $expert->terminacion_estudios = $this->aterminacion;
    $expert->sigue_estudiando = $this->sigue_estdiando;

    $expert->save();

    session()->flash('message-contactUpdate', 'Se actualizaron tus datos');
  }

  public function redesUpdate()
  {
    logger('En rdes update');
    $user = Auth::user();
    $expert = $user->usable;

    $data = $this->validate([
      'facebook' => 'required|min:7',
      'twitter' => 'required|min:7',
      'instagram' => 'required|min:7',
    ]);

    $expert->facebook = $this->facebook;
    $expert->twitter = $this->twitter;
    $expert->instagram = $this->instagram;

    $expert->save();

    session()->flash('message-redesUpdate', 'Se actualizaron tus datos');
  }

}
