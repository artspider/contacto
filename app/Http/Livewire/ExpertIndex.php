<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\expert;

class ExpertIndex extends Component
{

    public function render()
    {
        return view('livewire.expert-index');
    }
}
