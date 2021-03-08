<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\expert;
use App\tag;
use App\expert_tag;
use App\categoria;
use App\subcategoria;
use App\subcategoria_tag;

class ExpertProject extends Component
{
    public $categorias;
    public $CategoriaId = 1;
    public $subcategorias;
    public $subcategoriaId;
    public $tags;
    public $subcategoriaTags;
    

    public function mount()
    {
        $this->categorias = Categoria::all();
    }

    public function render()
    {
        
        return view('livewire.expert-project');
    }

    public function updatedCategoriaId()
    {
        logger('Vamos a buscar: ');
        $this->subcategorias = Categoria::find($this->CategoriaId)->subcategorias;        
    }

    public function updatedsubcategoriaId()
    {
        logger('Devolviendo todos los tags: ');
        
        $subcategoria = Subcategoria::find($this->subcategoriaId);
        logger('Subcategoria = ');
        logger($subcategoria);
        

        $this->subcategoriaTags = $subcategoria->tags;
        logger('Tags de esta subcategoria: ');
        logger($this->subcategoriaTags);
        $this->tags = Tag::orderBy('name')->get();
    }

    public function addTag($tag_id)
    {
        logger('Hiciste clic en el tag');
        logger($tag_id);
        $subcategoria_tag = Subcategoria_tag::create([
            'subcategoria_id' => $this->subcategoriaId,
            'tag_id' => $tag_id,
            'created_at' => now(),
            'updated_at' => now(),
          ]);
    }
}
