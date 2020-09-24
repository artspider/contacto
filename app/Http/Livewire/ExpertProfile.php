<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\newMsjToExpert;
use Illuminate\Support\Facades\Http;

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
  public $foto_perfil;
  public $expert_id;

  public $tags;
  public $about; //descripcion personal y de lo que ofrece al empleador o empresa

  public $educacion;
  public $escuela_id;
  public $escuela;
  public $carrera;
  public $fecha_terminacion;
  public $sigue_estudiando;

  public $experiencia;
  public $trabajo_id;
  public $empresa;
  public $puesto;
  public $periodo;

  public $showProfile = 0;
  public $data_updated;

  public $estados;
  public $ciudades;

  private $coll_estados;

  protected $listeners = ['refreshComponent' => 'actualizaCarreras'];

  public function load()
  {
    $this->coll_estados = collect([
      ['estado' => 'Aguascalientes', 'corto' => 'ags'],
      ['estado' => 'Baja California', 'corto' => 'bcn'],
      ['estado' => 'Baja California Sur', 'corto' => 'bcs'],
      ['estado' => 'Campeche', 'corto' => 'cam'],
      ['estado' => 'Coahuila', 'corto' => 'coa'],
      ['estado' => 'Colima', 'corto' => 'col'],
      ['estado' => 'Chiapas', 'corto' => 'chp'],
      ['estado' => 'Chihuahua', 'corto' => 'chh'],
      ['estado' => 'Ciudad de Mexico', 'corto' => 'cmx'],
      ['estado' => 'Durango', 'corto' => 'dur'],
      ['estado' => 'Guanajuato', 'corto' => 'gua'],
      ['estado' => 'Guerrero', 'corto' => 'gro'],
      ['estado' => 'Hidalgo', 'corto' => 'hid'],
      ['estado' => 'Jalisco', 'corto' => 'jal'],
      ['estado' => 'México', 'corto' => 'mex'],
      ['estado' => 'Michoacán', 'corto' => 'mic'],
      ['estado' => 'Morelos', 'corto' => 'mor'],
      ['estado' => 'Nayarit', 'corto' => 'nay'],
      ['estado' => 'Nuevo León', 'corto' => 'nle'],
      ['estado' => 'Oaxaca', 'corto' => 'oax'],
      ['estado' => 'Puebla', 'corto' => 'pue'],
      ['estado' => 'Querétaro', 'corto' => 'qro'],
      ['estado' => 'Quintana Roo', 'corto' => 'roo'],
      ['estado' => 'San Luis Potosi', 'corto' => 'slp'],
      ['estado' => 'Sinaloa', 'corto' => 'sin'],
      ['estado' => 'Sonora', 'corto' => 'son'],
      ['estado' => 'Tabasco', 'corto' => 'tab'],
      ['estado' => 'Tamaulipas', 'corto' => 'tam'],
      ['estado' => 'Tlaxcala', 'corto' => 'tla'],
      ['estado' => 'Veracruz', 'corto' => 'ver'],
      ['estado' => 'Yucatán', 'corto' => 'yuc'],
      ['estado' => 'Zacatecas', 'corto' => 'zac'],
    ]);
  }

  public function render()
  {
    $this->load();
    logger('En el render ... ');

    $estado_buscado = $this->estado;
    $estado_buscado = ltrim($estado_buscado);
    $estado_buscado = rtrim($estado_buscado);
    logger(ltrim($this->estado));
    if (strlen($this->estado) > 3)
    {
      logger('entro al if');
      $estado_actual = $this->coll_estados->firstWhere('estado', $estado_buscado);
    }
    else
    {
      logger('entro al else');
      $estado_actual = $this->coll_estados->firstWhere('corto', strtolower($estado_buscado));
    }
    logger($estado_actual);
    if($estado_actual != "")
    {
      $this->ciudades = Http::get('https://api-sepomex.hckdrk.mx/query/get_municipio_por_estado/' . $estado_actual['estado'] )['response']['municipios'];
    }

    logger('Show Prifile');
    logger($this->showProfile);
    return view('livewire.expert-profile');
  }

  public function mount()
  {

    $this->coll_estados = collect([
      ['estado' => 'Aguascalientes', 'corto' => 'ags'],
      ['estado' => 'Baja California', 'corto' => 'bcn'],
      ['estado' => 'Baja California Sur', 'corto' => 'bcs'],
      ['estado' => 'Campeche', 'corto' => 'cam'],
      ['estado' => 'Coahuila', 'corto' => 'coa'],
      ['estado' => 'Colima', 'corto' => 'col'],
      ['estado' => 'Chiapas', 'corto' => 'chp'],
      ['estado' => 'Chihuahua', 'corto' => 'chh'],
      ['estado' => 'Ciudad de Mexico', 'corto' => 'cmx'],
      ['estado' => 'Durango', 'corto' => 'dur'],
      ['estado' => 'Guanajuato', 'corto' => 'gua'],
      ['estado' => 'Guerrero', 'corto' => 'gro'],
      ['estado' => 'Hidalgo', 'corto' => 'hid'],
      ['estado' => 'Jalisco', 'corto' => 'jal'],
      ['estado' => 'México', 'corto' => 'mex'],
      ['estado' => 'Michoacán', 'corto' => 'mic'],
      ['estado' => 'Morelos', 'corto' => 'mor'],
      ['estado' => 'Nayarit', 'corto' => 'nay'],
      ['estado' => 'Nuevo León', 'corto' => 'nle'],
      ['estado' => 'Oaxaca', 'corto' => 'oax'],
      ['estado' => 'Puebla', 'corto' => 'pue'],
      ['estado' => 'Querétaro', 'corto' => 'qro'],
      ['estado' => 'Quintana Roo', 'corto' => 'roo'],
      ['estado' => 'San Luis Potosi', 'corto' => 'slp'],
      ['estado' => 'Sinaloa', 'corto' => 'sin'],
      ['estado' => 'Sonora', 'corto' => 'son'],
      ['estado' => 'Tabasco', 'corto' => 'tab'],
      ['estado' => 'Tamaulipas', 'corto' => 'tam'],
      ['estado' => 'Tlaxcala', 'corto' => 'tla'],
      ['estado' => 'Veracruz', 'corto' => 'ver'],
      ['estado' => 'Yucatán', 'corto' => 'yuc'],
      ['estado' => 'Zacatecas', 'corto' => 'zac'],
    ]);

    $this->estados = $this->coll_estados->pluck('estado')->all();

    $this->showProfile = 0;
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

    $this->escuela_id=0;
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

      $this->foto_perfil = $expert->url_image;

      logger('quero sacar la foto de:::: ');
      logger( $this->foto_perfil);
      logger(Storage::url($this->foto_perfil));

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
      $this->ciudad = "";
      $this->estado = "";
      $this->facebook = "sin datos";
      $this->instagram = "sin datos";
      $this->twitter = "sin datos";
      $this->habilidades = null;
      $this->aterminacion = "0000";
      $this->sigue_estdiando = "0";
      $this->foto_perfil = "img/avatar1.png";

      //session()->flash('toast_success', 'No has actualizado tus datos. Hacerlo te ayudará a ser contratado');
      toast('No has actualizado tus datos. Hacerlo te ayudará a ser contratado','error');
      logger($user);
    }

    $this->data_updated = 0;
    logger('Saliendo del mount');

  }

  public function actualizaCarreras()
  {
    logger('En actualizaCarreras');
    $user = Auth::user();
    $expert = $user->usable;
    $this->educacion = $expert->titulos;
    $this->experiencia = $expert->trabajos;
    session()->flash('message-educacion', 'Se actualizaron tus datos');
    return view('livewire.expert-profile');
  }

  public function aboutUpdate()
  {
    logger('En el aboutUpdate');

    $user = Auth::user();
    $expert = $user->usable;

    if( $this->foto_perfil == $expert->url_image)
    {
      logger( "Es la misma foto" );
      $data = $this->validate([
        'nombre' => 'required|min:7',
        'profesion' => 'required|min:7',
        'especialidad' => 'required|min:7',
        'about' => 'required|min:10',
      ]);
    }else
    {
      $data = $this->validate([
        'nombre' => 'required|min:7',
        'profesion' => 'required|min:7',
        'especialidad' => 'required|min:7',
        'about' => 'required|min:10',
        'foto_perfil' => 'image|max:1024',
      ]);

      $foto_subida = $this->foto_perfil->store('fotos','public');
      logger(asset($foto_subida));

      logger('El archivo es 1: ');
      logger( $foto_subida);
      $foto_subida = str_replace("public", "storage", $foto_subida);
      logger('El archivo es 2: ');
      logger( $foto_subida);
      $expert->url_image = $foto_subida;
      $this->foto_perfil = $foto_subida;
    }

    $user->name = $this->nombre;
    $user->save();

    $expert->nombre = $this->nombre;
    $expert->profesion = $this->profesion;
    $expert->especialidad = $this->especialidad;
    $expert->habilidades = $this->about;

    $expert->save();
    $this->data_updated = 1;

    sleep(1);

    logger('Saliendo del aboutUpdate');
    session()->flash('message-aboutUpdate', 'Se actualizaron tus datos');
  }

  public function contactUpdate()
  {
    logger('En el contactUpdate');
    $this->load();

    $user = Auth::user();
    $expert = $user->usable;

    $data = $this->validate([
      'telefono' => 'required|digits:10',
      'ciudad' => 'required|min:3',
      'estado' => 'required|min:3|max:50',
    ]);

    $expert->telefono = $this->telefono;
    $expert->ciudad = $this->ciudad;

    $estado_actual = $this->coll_estados->firstWhere('estado', trim($this->estado));
    $expert->estado = ucfirst($estado_actual['corto']);
    $expert->save();

    logger('Datos del experto: ');
    logger($expert);
    logger('Saliendo el contactUpdate');
    session()->flash('message-contactUpdate', 'Se actualizaron tus datos');
    $this->showProfile = false;
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

  public function educacionUpdate($escuela_id)
  {
    logger('en el educacion Update');
    $this->escuela_id = $escuela_id;
    $escuela = Titulo::find($escuela_id);

    $data = $this->validate([
      'escuela' => 'required|min:7',
      'carrera' => 'required|min:7',
      'fecha_terminacion' => 'required|min:4|max:4',
    ]);

    $escuela->escuela = $data['escuela'];
    $escuela->carrera = $data['carrera'];
    $escuela->fecha_terminacion = $data['fecha_terminacion'];
    $escuela->sigue_estudiando = $this->sigue_estudiando;
    $escuela->save();

    session()->flash('message-educacionUpdate', 'Se actualizaron tus datos');
  }

  public function educacionDelete($escuela_id)
  {
    logger('La escuela a eliminar es: ' . $escuela_id);
    $escuela = Titulo::find($escuela_id);
    $escuela->delete();
    session()->flash('message-educacionUpdate', 'Se actualizaron tus datos');
    $this->emit('refreshComponent');
  }

  public function toEditForm($escuela_id)
  {
    $this->escuela_id = $escuela_id;
    $escuela = Titulo::find($escuela_id);
    $this->escuela = $escuela->escuela;
    $this->carrera = $escuela->carrera;
    $this->fecha_terminacion = $escuela->fecha_terminacion;
    $this->sigue_estudiando = $escuela->sigue_estudiando;

  }

  public function experienciaUpdate($experiencia_id)
  {
    logger('en el experincia Update');
    $this->trabajo_id = $experiencia_id;
    $trabajo = Trabajo::find($experiencia_id);

    $data = $this->validate([
      'empresa' => 'required|min:3',
      'puesto' => 'required|min:7',
      'periodo' => 'required|min:10'
    ]);

    $trabajo->puesto = $this->puesto;
    $trabajo->empresa = $this->empresa;
    $trabajo->fecha = $this->periodo;

    $trabajo->save();

    session()->flash('message-experiencia', 'Se actualizaron tus datos');
  }

  public function toEditExperienciaForm($experiencia_id)
  {
    $this->trabajo_id = $experiencia_id;
    $trabajo = Trabajo::find($experiencia_id);
    $this->empresa = $trabajo->empresa;
    $this->puesto = $trabajo->puesto;
    $this->periodo = $trabajo->fecha;
  }

  public function experienciaDelete($experience_id)
  {
    logger('El trabajo a eliminar es: ' . $experience_id);
    $trabajo = Trabajo::find($experience_id);
    $trabajo->delete();
    session()->flash('message-experiencia', 'Se actualizaron tus datos');
    $this->emit('refreshComponent');
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

  public function closeWindow($window)
  {

    logger('En el close window. El valos de window es:' . $window);
    logger('El valor de data_updated: ' . $this->data_updated);

    if($this->data_updated == 0)
    {
      $user = Auth::user();
      $expert = $user->usable;
      switch ($window) {
        case 1:
          $this->nombre = $expert->nombre;
          $this->profesion = $expert->profesion;
          $this->especialidad = $expert->especialidad;
          $this->about = $expert->habilidades ;
          break;
        case 2:
          $this->telefono = $expert->telefono;
          $this->ciudad = $expert->ciudad;
          $this->estado = $expert->estado;
          break;
        case 3:
          break;
        case 4:
          break;
        case 5:
          break;
        case 6:
          $this->facebook = $expert->facebook;
          $this->twitter = $expert->twitter;
          $this->instagram = $expert->instagram;
          break;
      }

    }

    $this->updated = 0;
    $this->resetValidation();
    session()->forget('message-aboutUpdate');
    return view('livewire.expert-profile');
  }

}
