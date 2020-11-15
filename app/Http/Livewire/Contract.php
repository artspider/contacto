<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Notifications\newMsjToExpert;

use App\expert;
use App\employer;
use App\order;

class Contract extends Component
{
  public $titulo;
  public $descripcion;
  public $status;
  public $fecha_entrega;
  public $precio_acordado;
  public $ok_expert;
  public $ok_employer;

  public $expertId;
  public $employerId;
  public $employerName;
  public $employerUrlImage;

  public function mount($id)
  {
    $this->expertId = $id;
    $user = Auth::user();
    $employer = $user->usable;
    $this->employerId = $employer->id;
    $this->employerName = $employer->nombre;
    $this->employerUrlImage = $employer->url_image;

    $this->titulo = "Título del proyecto";
    $this->descripcion = "Escribe una descripción detallada del proyecto";
    logger('mount Contract');
  }

  public function render()
  {
    return view('livewire.contract');
  }

  public function getExpertProperty()
  {
    return Expert::find($this->expertId);
  }

  public function createOrder()
  {
    $data = $this->validate([
      'titulo' => 'required|min:10',
      'descripcion' => 'required|min:15',
      'fecha_entrega' => 'required',
    ]);

    $orden = new Order;

    $orden->titulo = $this->titulo;
    $orden->descripcion = $this->descripcion;
    $orden->status = 0; //0 = Pendiente, 1 = En proceso, 2 = Terminado
    $orden->fecha_entrega = $this->fecha_entrega;
    $orden->precio_acordado = 0;
    $orden->expert_id = $this->expertId;
    $orden->employer_id = $this->employerId;
    $orden->ok_expert = false;
    $orden->ok_employer = true;

    if ($orden->save()){
      $this->sendMsgToExpert();
      session()->flash('message-contactCreated', 'Se ha enviado el contrato al experto');
    }
  }

  public function sendMsgToExpert()
  {
    logger('Entrando a SenMsgToExpert.');

    $orderMesagge = "Hola, " . $this->expert->nombre . "tenemos una propuesta de trabajo para ti. Busca en tu bandeja de ordenes, esperamos tu respuesta...";

    $msj = collect(["id" => $this->employerId, "name" => $this->employerName, "picture" => $this->employerUrlImage, "message" => $orderMesagge]);

    logger($msj);

    $this->expert->notify(new newMsjToExpert($msj));
    logger('saliendo de SenMsgToExpert');
  }
}
