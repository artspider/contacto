<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ExpertDetail extends Component
{

  public function mount($id)
  {
    logger('el id es: ');
    logger($id);
  }

  public function render()
  {
    return view('livewire.expert-detail');
  }
}
