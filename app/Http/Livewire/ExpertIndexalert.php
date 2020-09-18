<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\expert;

class ExpertIndexalert extends Component
{
    public $mensajesPorLeer;
    public function render()
    {
        $this->mensajesPorLeer = Auth::user()->usable->unreadNotifications->count();
        logger('Mensajes no leidos: ' . $this->mensajesPorLeer);
        return <<<'blade'
            <span class="inline-block h-1/2 text-xs text-red-900 font-bold bg-main-yellow rounded-full px-2 py-1">
                {{ $mensajesPorLeer }}
            </span>
        blade;
    }
}
