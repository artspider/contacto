<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\employer;
use App\order;

class EmployerProject extends Component
{
    public function render()
    {
        return view('livewire.employer-project');
    }
}
