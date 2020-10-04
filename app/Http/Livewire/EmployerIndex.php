<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;
use App\expert;
use App\tag;
use App\expert_tag;

class EmployerIndex extends Component
{
  public $nombre;
  public $paterno;
  public $materno;
  public $telefono;
  public $ciudad;
  public $estado;
  public $search_tag;
  public $search_ciudad;
  public $all_experts;
  public $show;

  public function mount()
  {
    logger('En el mount del index--exployer');
    $this->show=false;
    $user = Auth::user();
    logger("Usuario");
    logger($user);
    $employer = $user->usable;
    logger('Empleador');
    logger($employer);

    $this->email = $user->email;
    $wasUpdated =  $employer->updated_at->gt($employer->created_at);

    if($wasUpdated){
      logger('Datos de Empleador han sido actualizado');
      $this->nombre = $user->name;
      $this->paterno = $employer->paterno;
      $this->materno = $employer->materno;
      $this->telefono = $employer->telefono;
      $this->ciudad = $employer->ciudad;
      $this->estado = $employer->estado;
    }else{
      logger('Datos de Empleador no han sido actualizado');
      $this->nombre = $user->name;
      $this->paterno = "sin datos";
      $this->materno = "sin datos";
      $this->telefono = "0000000000";
      $this->ciudad = "sin datos";
      $this->estado = "abc";
      session()->flash('message', 'No has actualizado tus datos. Permitenos saber un poco mas de ti');
    }

    $this->search_tag="";
    logger('Saliendo del mount en el index--exployer');
  }

  public function render()
  {
    $r=[];
    logger('En el render');

    if(($this->search_tag != "") and ($this->search_tag != " "))
    {
      logger($this->all_experts);
      logger($this->search_tag);
      $tags = Tag::with('experts')->name($this->search_tag)->get();
      $r = $tags->pluck('experts')->collapse();
      if($this->search_ciudad != "")
      {
        logger($this->search_ciudad);
        $r = $r->where('ciudad','=',$this->search_ciudad);
        logger('Experto por tag-ciudad');
        logger($r);
        //$ex_profesion_ciudad = Expert::profesion($this->search_tag)->ciudad($this->search_ciudad)->get();
        $ex_profesion_ciudad = Expert::with('tags')
                                ->where('ciudad', 'LIKE', "$this->search_ciudad%")
                                ->where(function($query) {
                                  $query->where('profesion','like',"%$this->search_tag%")
                                        ->orwhere('especialidad','like', "%$this->search_tag%");})
                                        ->get();
        logger('Experto por profesion' . $ex_profesion_ciudad);
        $r = $r->merge($ex_profesion_ciudad);
        $r = collect($r)->unique('id');
      }else{
        logger('expertos de todo el pais');
        logger($r);
        //$ex_profesion_ciudad = Expert::profesion($this->search_tag)->ciudad($this->search_ciudad)->get();
        $ex_profesion_ciudad = Expert::with('tags')
                                ->where(function($query) {
                                  $query->where('profesion','like',"%$this->search_tag%")
                                        ->orwhere('especialidad','like', "%$this->search_tag%");
                                      })
                                ->get();
        logger('Experto por profesion' . $ex_profesion_ciudad);
        $r = $r->merge($ex_profesion_ciudad);
        $r = collect($r)->unique('id');
      }
      logger('Lo que encontro en la busqueda' . $r);
      if(count($r) == 0)
      {
        logger('Vaacioooooooo');
        $r=null;
      }
    }

    return view('livewire.employer-index', [
      'experts' => $r
    ]);
  }

  public function getExpertProperty()
  {
    return Expert::Find(1);
  }

  public function searchExpert($formData)
  {
    $this->search_tag = $formData['tag'];
    $this->search_ciudad = $formData['ciudad'];
    logger('En el searchExpert del index--exployer');
    logger("Se busca: ");
    logger($this->search_tag);
    $tags = Tag::with('experts')->name($this->search_tag)->get();

    $this->show = true;
  }

  public function showExpert($id)
  {
    logger('en el showExpert. El id es: '. $id);
    return redirect()->route('expert-detail', ['id' => $id]);
  }
}

