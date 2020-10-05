<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\expert;
use App\order;

class ExpertIndex extends Component
{

  public $expert;

  public function mount()
  {
    $user = Auth::user();
    $this->expert = $user->usable;
  }

  public function render()
  {
    return view('livewire.expert-index', [
      'orders' => $this->expert->orders,
      ]);
  }

  public function showContract($id)
  {
    return redirect()->route('contract-expert', ['id' => $id]);
  }
}
