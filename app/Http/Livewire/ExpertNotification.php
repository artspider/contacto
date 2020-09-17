<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ExpertNotification extends Component
{
    public $expert;

    public function mount()
    {
        $user = Auth::user();
        $this->expert = $user->usable;
    }

    public function render()
    {
        logger($this->expert->notifications);
        return view('livewire.expert-notification', [
            'notifications' => $this->expert->notifications,
        ]);
    }
}

