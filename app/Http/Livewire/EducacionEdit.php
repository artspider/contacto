<?php

namespace App\Http\Livewire;

use Livewire\Component;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use App\Titulo;

class EducacionEdit extends Component
{
  public $user_id;

  public $escuela_id;
  public $escuela;
  public $carrera;
  public $fecha_terminacion;
  public $sigue_estudiando;

  public function mount($id)
  {
    logger('El id de la escuela es: ' . $id);
    $escuela = Titulo::find($id);
    logger($escuela);
    if($escuela)
    {
      $this->escuela_id = $escuela->id;
      $this->escuela = $escuela->escuela;
      $this->carrera = $escuela->carrera;
      $this->fecha_terminacion = $escuela->fecha_terminacion;
      $this->sigue_estudiando = $escuela->sigue_estudiando;
    }
  }

  public function render()
  {
    return view('livewire.educacion-edit');
  }

  public function deleteEscuela($escuela_id)
  {
    logger('La escuela a eliminar es: ' . $escuela_id);
    $escuela = Titulo::find($escuela_id);
    $escuela->delete();
    session()->flash('message-educacionUpdate', 'Se actualizaron tus datos');
    //Alert::success('Success Title', 'Success Message');
    //alert('Title','Lorem Lorem Lorem', 'message-educacion');
    $this->emit('refreshComponent');
  }

  public function updateCarrera($escuela_id)
  {
    logger('La escuela a actualizar es: ' . $escuela_id);
  }
}
