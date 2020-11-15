<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\expert;

class MenuHeaderProfile extends Component
{
    public $foto_perfil;
    public $nombre;

    public function render()
    {
        $user = Auth::user();
        $this->employer = $user->usable;
        $this->nombre = $this->employer->nombre;
        $wasUpdated =  $this->employer->updated_at->gt($this->employer->created_at);
        if($wasUpdated){
            $this->foto_perfil = $this->employer->url_image;
        }else {
            $this->foto_perfil = "fotos/no-profile-pic.jpg";
        }
        return <<<'blade'
            <div class=" bg-main-yellow  flex items-center px-4 py-2">
                <img class="expert__avatar w-8 h-8 xl:w-10 xl:h-10 2xl:w-10 2xl:h-10 rounded-full m-auto lg:m-0" src="{{asset('storage/' . $foto_perfil) }}" alt="">
                <p class="text-sm font-bold ml-2">{{ $nombre }}</p>
            </div>
        blade;
    }
}
