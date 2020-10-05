<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Notifications\newMsjToEmployer;

use App\expert;
use App\employer;
use App\order;

class ContractExpert extends Component
{
  public $titulo;
  public $descripcion;
  public $status;
  public $fecha_entrega;
  public $precio_acordado;
  public $ok_expert;
  public $ok_employer;

  public $orderId;
  public $expertId;
  public $employerId;

  public function mount($id)
  {
    $this->orderId = $id;

    $user = Auth::user();
    $employer = $user->usable;
    $this->expertId = $employer->id;

    $this->employerId = $this->order->employer_id;

    logger('mount Contract');
  }

  public function render()
  {
    return view('livewire.contract-expert');
  }

  public function getExpertProperty()
  {
    return Expert::find($this->expertId);
  }

  public function getEmployerProperty()
  {
    return Employer::find($this->employerId);
  }

  public function getOrderProperty()
  {
    return Order::find($this->orderId);
  }

  public function acceptOrder()
  {
    $this->order->ok_expert = true;
    $this->order->status = 1;

    if ($this->order->save()){
      $this->sendMsgToEmployer();
      session()->flash('message-contractUpdated', 'Has aceptado el contrato...');
    }
  }

  public function sendMsgToEmployer()
    {
      $orderMesagge = "Hola " . $this->employer->nombre . ", te informamos que " . $this->expert->nombre . " ha aceptado el contrato. Ponte en contacto con el para definir los detalles del proyecto";

      $msj = collect(["id" => $this->expert->id, "name" => $this->expert->nombre, "message" => $orderMesagge]);

      logger($msj);

      $this->employer->notify(new newMsjToEmployer($msj));
      logger('saliendo de sendMsgToEmployer');
    }

}
