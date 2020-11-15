<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Expert;

class GetExpertforcard extends Component
{
    public $infomsj;
    public $name;
    public $image;

    public function mount($infomsj)
    {
        $this->expert = Expert::find($infomsj->data['expert_id']);
        
        $this->name = $this->expert->nombre;
        $this->image = $this->expert->url_image;
    }

    public function render()
    {
        
        return <<<'blade'
            <div class=" flex items-center mb-4 ">
                <img class="expert__avatar w-8 h-8 xl:w-10 xl:h-10 2xl:w-14 2xl:h-14 rounded-full m-auto lg:m-0" src="{{asset('storage/' . $this->image) }}" alt="">
                <p class="text-lg font-bold ml-4">{{ $this->name }}</p>
            </div>
        blade;
    }
}
