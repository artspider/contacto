<?php

namespace App\Http\Livewire;

use Livewire\Component;

use \Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Auth;
use App\trabajo;

class ExperienciaComponent extends Component
{

    public $empresa;
    public $puesto;
    public $periodo;
    public $expert_id;

    public function mount()
    {
        logger('En el mount de Experiencia');
        $user = Auth::user();
        $expert = $user->usable;
        $this->expert_id = $expert->id;
        $this->empresa="";
        logger('El experto es: ');
        logger($this->expert_id);

    }

    public function render()
    {
        return view('livewire.experiencia-component');
    }

    public function createTrabajo()
  {
    logger('En el create Trabajo');
    $data = $this->validate([
      'empresa' => 'required|min:3',
      'puesto' => 'required|min:7',
      'periodo' => 'required|min:10'
    ]);

    $trabajo = Trabajo::create([
      'empresa' => $this->empresa,
      'puesto' => $this->puesto,
      'fecha' => $this->periodo,
      'expert_id' => $this->expert_id,
      'created_at' => now(),
      'updated_at' => now(),
    ]);

    logger($trabajo);
    session()->flash('message-experiencia', 'Se actualizaron tus datos');
    $this->emit('refreshComponent');
  }
}
